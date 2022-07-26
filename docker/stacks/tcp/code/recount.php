<?php

/*******************************************/
/*** Author: Frederic Depuydt            ***/
/*** Mail: frederic.depuydt@outlook.com  ***/
/*******************************************/



    // STRICT MODE
    declare(strict_types=1);

    // DEBUGGING
    error_reporting(E_ALL | E_STRICT | E_NOTICE | E_WARNING);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');

    // AUTOLOAD CLASSES
    spl_autoload_register(function($class) {
        require_once 'classes/'.str_replace('\\', '/', $class).'.php';
    });


    class Recount{

        private $db;

        public function init(){
            $this->db = new \Database\MySQL();
        }

        public function run(){
            $sql = "SELECT `id` FROM `measurements` WHERE `deleted_at` IS NULL;";
            $results = $this->db->select($sql);
            foreach($results as $row){
                $this->count($row['id']);
            }            
        }


        private function count($_id){
            $sql = "SET @max = (SELECT MAX(`cyclecounter`) FROM `measurement_datasets` WHERE `measurement_id` = ".$_id.");
                                SET @count = (SELECT COUNT(`cyclecounter`) FROM `measurement_datasets` WHERE `measurement_id` = ".$_id.");
                                SELECT @max as 'max', @count as 'count';";
            $retries = 0;
            $succes = false;
            while($succes == false){
                try{
                    $row = $this->db->multi_select($sql)[0];
                    $succes = true;
                }catch(\Exception $e){
                    if($e->getCode() == 1213){
                        if($retries < 5){ 
                            $retries++; 
                            echo("Retrying multi_select for the ".$retries."th time"."\n");    
                            sleep(5);
                        } else {
                            throw new \Database\MySQLException($e->getMessage() . " (Max retries of 5 exceeded)", $e->getCode());
                        }                             
                    }else{
                        throw $e;
                    }
                }
            }
            if($row['max'] == null){
                echo("MAX equals NULL"."\n");
                $row['max'] = 'NULL';
            }
            echo("Max: ".$row['max']." Count: ".$row['count']."\n");
            $sql = "UPDATE `measurements` SET `max` = ". $row['max'] .", `count` = ". $row['count'] ." WHERE `id` = ".$_id.";";
            $this->db->query($sql);                    
        }


    }


    $recount = new Recount();
    $recount->init();
    $recount->run();