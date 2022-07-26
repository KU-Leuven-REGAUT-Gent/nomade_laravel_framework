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


    class DataStream extends \TCP\Stream{

        private $prev_cycle_counter = 0;
        private $db;
        private $stateflow = 0;
        private $measurement_id = 0;
        private $measurementInfo = [];
        private $bufferStatusOK;
        const BUFFER_SIZE = 3300;

        private $measurement_datablobs = [];
        private $measurement_datasets = [];
        private $measurement_count = 0;

        public function process_init(){
            $this->db = new \Database\MySQL();
            $this->bufferStatusOK = true;
        }

        public function process_data(){
            while(($strlen = strlen($this->data)) > 6){
                //$this->echo("NOTICE: Data Length = ".$strlen);
                $le = ord($this->data[1])*256 + ord($this->data[2]);
                $ler = ord($this->data[3])*256 + ord($this->data[4]);
                if(ord($this->data[0]) == 0x68 && ord($this->data[5]) == 0x68 && $le == $ler){
                    // HEADER IS CORRECT
                    if($strlen >= $le + 9){
                        $fcs = $this->data[$le + 6].$this->data[$le + 7];
                        if($fcs == $this->crc16(0, substr($this->data,6,$le)) && ord($this->data[$le+8]) == 0x16){
                            // COMPLETE PACKET OK
                            $fc = ord($this->data[6]);
                            $this->content = substr($this->data, 7, $le-1);
                            $this->data = substr($this->data, $le + 9, $strlen - ($le + 9));
                            if($this->stateflow($fc) !== 0){
                                $this->warning("Packet error - Stateflow issue");
                                return 1;
                            }
                        }else{
                            // FOOTER INCORRECT
                            $this->data = "";
                            $this->warning("Packet error - Footer incorrect");
                            return 1;
                        }
                    /*}else{
                        // INCORRECT LENGTH
                        $this->data = "";
                        $this->error("Incorrect length)");
                        return 1;*/
                    }else{
                        //$this->echo("WARNING (Not enough data)");
                        return 0;
                    }
                }else{
                    // HEADER INCORRECT
                    $this->data = "";
                    $this->warning("Packet error - Header incorrect");
                    return 1;
                }
            }
            return 0;
        }

        public function process_abort(){
            if($this->measurement_count > 0){
                $this->database_write();
            }

            if(isset($this->measurement_id) && $this->measurement_id > 0){
                if(isset($this->prev_cycle_counter) && $this->prev_cycle_counter > 0){
                    $sql = "SELECT `max` FROM `measurements` WHERE `id` = ".$this->measurement_id.";";
                    $max = @$this->db->select_value($sql);
                    if($max == null || $this->prev_cycle_counter > $max){
                        $sql = "SET @max = (SELECT MAX(`cyclecounter`) FROM `measurement_datasets` WHERE `measurement_id` = ".$this->measurement_id.");
                                SET @count = (SELECT COUNT(`cyclecounter`) FROM `measurement_datasets` WHERE `measurement_id` = ".$this->measurement_id.");
                                SELECT @max as 'max', @count as 'count';";
                        $retries = 0;
                        $succes = false;
                        while($succes == false){
                            try{
                                $row = @$this->db->multi_select($sql)[0];
                                $succes = true;
                            }catch(\Exception $e){
                                if($e->getCode() == 1213){
                                    if($retries < 5){ 
                                        $retries++; 
                                        $this->notice("Retrying multi_select for the ".$retries."th time");     
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
                            $this->notice("MAX equals NULL");
                            $row['max'] = 'NULL';
                        }                        
                        $this->notice("Max: ".$row['max']." Count: ".$row['count']);
                        $sql = "UPDATE `measurements` SET `max` = ". $row['max'] .", `count` = ". $row['count'] ." WHERE `id` = ".$this->measurement_id.";";
                        @$this->db->query($sql);                    
                    }else{
                        $this->echo("Count and Max Calculation (Outdated)");
                    }
                }else{
                    $this->echo("Count and Max Calculation (No cycles)");
                }
            }else{
                $this->echo("Count and Max Calculation (No measurement)");
            }
            return 0;
        }

        public function echo(String $text){
            parent::echo("M.ID: ".$this->measurement_id." ".$text);
        }


        public function stateflow($fc){
            //$this->echo("STATE: ".$this->stateflow."");
            //$this->echo("FC: ".$fc."");
            switch($this->stateflow){
                case 0:
                    switch($fc){
                        case 0x10:
                            $this->send_packet(0x90);
                            $this->stateflow++;
                            $this->echo("STATE CHANGE: ".$this->stateflow."");
                            break;
                        default:
                            $this->send_packet(0xFE);
                            $this->warning("Packet error - Unknown Frame Control (FC=0x".dechex($fc).")");
                            break;
                    }
                    break;
                case 1:
                    switch($fc){
                        case 0x11:
                            if(strlen($this->content) == 4){
                                $this->measurement_id = ord($this->content[0])*16777216+ord($this->content[1])*65536+ord($this->content[2])*256+ord($this->content[3]);
                                if(!$this->getMeasurementInfo()){
                                    $this->send_packet(0x91);
                                    $this->stateflow++;
                                    $this->echo("STATE CHANGE: ".$this->stateflow."");
                                }
                            }else{
                                $this->send_packet(0xFE);
                                $this->warning("Packet error - Bad measurement id");
                            }
                            break;
                        default:
                            $this->send_packet(0xFE);
                            $this->warning("Packet error - Unknown Frame Control (FC=0x".dechex($fc).")");
                            break;
                    }
                    break;
                case 2:
                    switch($fc){
                        case 0x12:
                            try{
                                $sql = "SELECT IFNULL(MAX(`cyclecounter`), 0) FROM `measurement_datasets` WHERE `measurement_id` = ".$this->measurement_id.";";
                                $this->prev_cycle_counter = @$this->db->select_value($sql);
                            }catch(\Database\MySQLException $e){
                                $this->error("MySQL error - ". $e->getMessage() ."");
                                return 1;
                            }
                            $this->send_packet(0x92,strrev(pack("L", $this->prev_cycle_counter)));
                            $this->echo("CYCLE COUNTER: ".$this->prev_cycle_counter."");
                            break;
                        case 0x80:
                            return $this->process_dataset();
                            break;
                        default:
                            $this->send_packet(0xFE);
                            $this->warning("Packet error - Unknown Frame Control (FC=0x".dechex($fc).")");
                            break;
                    }
                    break;
            }
            return 0;
        }
        public function getMeasurementInfo()
        {
            try{
                $result = @$this->db->select_row("SELECT `name_en`, `setup_id` FROM `measurements` WHERE `id` = ".$this->measurement_id.";");
                $this->measurementInfo['name_en'] = $result['name_en'];
                $this->measurementInfo['setup_id'] = $result['setup_id'];
            }catch(\Database\MySQLException $e){
                $this->send_packet(0xFE);
                if($e->getCode() == \Database\MySQLException::ER_TOO_FEW_ROWS){
                    $this->warning("Unknown Measurement ID: ".$this->measurement_id.")");
                }else{
                    $this->error("MySQL error - ". $e->getMessage() ."");
                }
                $this->measurement_id = 0;
                return 1;
            }

            try{
                $result = @$this->db->select_row("SELECT `name_en` FROM `setups` WHERE `id` = ".$this->measurementInfo['setup_id'].";");
            }catch(\Database\MySQLException $e){
                $this->send_packet(0xFE);
                if($e->getCode() == \Database\MySQLException::ER_TOO_FEW_ROWS){
                    $this->warning("Unknown Setup ID: ".$this->measurementInfo['setup_id'].")");
                }else{
                    $this->error("MySQL error - ". $e->getMessage() ."");
                }
                $this->measurement_id = 0;
                return 1;
            }

            try{
                // --- OLD code with problem of select deleted
                // $sql = 'SELECT  `t1`.`id`,
                //                 `t1`.`name_en`,
                //                 IF(`t2`.`value` IS NULL, `t1`.`value`,  `t2`.`value`) AS value
                //         FROM (
                //             SELECT  `instrument_type_parameter`.`value`,
                //                     `instruments`.`id`,
                //                     `instruments`.`name_en`
                //             FROM `instrument_type_parameter`
                //             INNER JOIN `instruments`
                //             ON `instruments`.`instrument_type_id` = `instrument_type_parameter`.`instrument_type_id`
                //             WHERE `instrument_type_parameter`.`parameter_id` = 33
                //             AND `instruments`.`setup_id` = '.$this->measurementInfo['setup_id'].'
                //             ORDER BY `instruments`.`id` ASC
                //         ) AS `t1`
                //         LEFT JOIN (
                //             SELECT  `instrument_parameter`.`value`,
                //                     `instruments`.`id`
                //             FROM `instrument_parameter`
                //             INNER JOIN `instruments`
                //             ON `instruments`.`id` = `instrument_parameter`.`instrument_id`
                //             WHERE `instrument_parameter`.`parameter_id` = 33
                //             AND `instruments`.`setup_id` = '.$this->measurementInfo['setup_id'].'
                //             ORDER BY `instruments`.`id` ASC
                //         ) AS `t2`
                //         ON `t1`.`id` = `t2`.`id`;';

                $sql = 'SELECT  `t1`.`id`,
                                `t1`.`name_en`,
                                IF(`t2`.`value` IS NULL, `t1`.`value`,  `t2`.`value`) AS value
                        FROM (
                            SELECT  `instrument_type_parameter`.`value`,
                                    `instruments`.`id`,
                                    `instruments`.`name_en`
                            FROM `instrument_type_parameter`
                            INNER JOIN `instruments`
                            ON `instruments`.`instrument_type_id` = `instrument_type_parameter`.`instrument_type_id`
                            WHERE `instrument_type_parameter`.`parameter_id` = 33
                            AND	`instruments`.`deleted_at` IS NULL
                            AND `instruments`.`setup_id` = '.$this->measurementInfo['setup_id'].'                         
                            ORDER BY `instruments`.`id` ASC
                        ) AS `t1`
                        LEFT JOIN (
                            SELECT  `instrument_parameter`.`value`,
                                    `instruments`.`id`
                            FROM `instrument_parameter`
                            INNER JOIN `instruments`
                            ON `instruments`.`id` = `instrument_parameter`.`instrument_id`
                            WHERE `instrument_parameter`.`parameter_id` = 33
                            AND `instruments`.`setup_id` = '.$this->measurementInfo['setup_id'].'
                            ORDER BY `instruments`.`id` ASC
                        ) AS `t2`
                        ON `t1`.`id` = `t2`.`id`;';
                $this->measurementInfo['instruments'] = @$this->db->select($sql);
                $dataOutputTypeLength = array(
                    0   =>  0,  // None
                    161 =>  5,  // JOYSTICK_DX2_OUTPUT (0xA1)
                    162 =>  6,  // JOYSTICK_PG_OUTPUT (0xA2)
                    163 =>  5,  // JOYSTICK_LINX_OUTPUT (0xA3)
                    177 =>  26, // IMU_9AXIS_ROT_VEC (0xB1)
                    178 =>  12, // IMU_6AXIS (0xB2)
                    180 =>  8,  // IMU_QUAT_QUAT_ONLY (0xB4)
                    181 =>  20, // IMU_QUAT_GYRO_ACC (0xB5)
                    182 =>  40, // IMU_QUAT_GYRO_ACC_100Hz (0xB6)
                    183 =>  16,  // IMU_QUAT_QUAT_ONLY_100Hz (0xB7)
                    184 =>  8,  // IMU_QUAT_9DOF (0xB8)
                    185 =>  16,  // IMU_QUAT_9DOF_100Hz (0xB9)
                    186 =>  18, // IMU_GYRO_ACC_MAG (0xBA)
                    187 =>  36, // IMU_GYRO_ACC_MAG_100Hz (0xBB)
                    193 =>  17, // GPS_MIN_DATA (0xC1)
                //  194 =>  0,  // GPS_STATUS (0xC2)
                //  195 =>  0,  // GPS_DATA_STATUS (0xC3)
                    209 =>  2,  // CAN_DISTANCE_NODES D1 (0xD1) (US)
                    210 =>  1,  // CAN_DISTANCE_NODES D2 (0xD2) (IR)
                    211 =>  5,  // CAN_DISTANCE_NODES D3 (0xD3) (US+IR)
                    212 =>  6,  // CAN_DISTANCE_NODES D4 (0xD4) (US+2IR)
                    213 =>  7,  // CAN_DISTANCE_NODES D5 (0xD5) (US+3IR)
                    214 =>  6,  // CAN_DISTANCE_NODES D6 (0xD6) (4IR)
                    215 =>  2,  // CAN_DISTANCE_NODES D7 (0xD7) (4IR) Only Calculated Value
                    216 =>  2,  // CAN_DISTANCE_NODES D8 (0xD8) (US+3IR) Only Calculated Value
                    225 =>  8,  // Real Time Clock (RTC) (0xE1)
                    241 =>  2,  // USB AD as Instrument (0xF1)
                    242 =>  3,  // USB AD as Instrument + Sensor activate bits (0xF2)
                //  512 =>  0,  // AAMS Datatype
                );
                $this->measurementInfo['totalBlob']=0;
                foreach($this->measurementInfo['instruments'] as $instrument){
                    $instrument['length'] = $dataOutputTypeLength[$instrument['value']];
                    $this->measurementInfo['totalBlob'] += $instrument['length'] + 1;
                }
            }catch(\Database\MySQLException $e){
                $this->send_packet(0xFE);
                $this->error("MySQL error - ". $e->getMessage() ."");
                return 1;
            }
            return 0;
        }

        public function process_dataset(){
            //$executionStartTime = microtime(true);
            $dataset = $this->content;
            $len = strlen($dataset);
            $cycle_counter = ord($dataset[0])*16777216+ord($dataset[1])*65536+ord($dataset[2])*256+ord($dataset[3]);


            if($cycle_counter != $this->prev_cycle_counter + 1){
                $this->warning("Cycle counter issue (prev ".$this->prev_cycle_counter.", curr ".$cycle_counter.")");
            }
            $this->prev_cycle_counter = $cycle_counter;
            $data = substr($dataset, 4, $len-5);

            $this->measurement_datasets[$this->measurement_count] = $cycle_counter.', '.ord($dataset[$len-1]);

            if($this->measurementInfo['totalBlob'] != strlen($data)){
                $this->error("Blob lengths don't match, expected: ".$this->measurementInfo['totalBlob']." received: ".strlen($data));
                return 1;
            }

            $offset = 0;
            foreach($this->measurementInfo['instruments'] as $instrument){
                $len = $instrument['length'];
                $datablob = \addslashes(substr($data, $offset, $len));               
                $status = ord($data[$offset + $len]);
                $datablobs[$instrument['id']] = $instrument['id'].', "'.$datablob.'", '.$status;   
                $offset += 1 + $len;
            }
            $this->measurement_datablobs[$this->measurement_count] = $datablobs;
            $this->measurement_count++;
            

            if($this->measurement_count >= 1500){
                $this->database_write();
                $this->measurement_count = 0;
            }
            

            /*$executionEndTime = microtime(true);
            $seconds = $executionEndTime - $executionStartTime;
            $this->echo("NOTICE: process_dataset took ". $seconds ." seconds.");*/
            return 0;
        }

        public function database_write(){
            //$this->echo("Writing ".$this->measurement_count." datasets to the database.");
            $sql_1 =   'SET @AUTO_ID = (SELECT AUTO_INCREMENT + 1
                                    FROM information_schema.TABLES
                                    WHERE TABLE_SCHEMA = "'.$this->env['DB_NAME'].'"
                                    AND TABLE_NAME = "measurement_datasets");
                        INSERT INTO `measurement_datasets` (`id`, `measurement_id`, `cyclecounter`, `status`)
                        VALUES ';
            $sql_2 =   ';
                        INSERT INTO `measurement_datablobs` (`measurement_dataset_id`, `instrument_id`, `data`, `status`)
                        VALUES ';
            //$executionStartTime = microtime(true);
            for($i=0; $i < $this->measurement_count; $i++){
                if($i>0){
                    $sql_1 .= ', ';
                    $sql_2 .= ', ';
                }
                $sql_1 .= '(@AUTO_ID + '.$i.', '.$this->measurement_id.', '.$this->measurement_datasets[$i].')';
                $j=0;

                foreach($this->measurement_datablobs[$i] as $datablob){
                    if($j>0){
                        $sql_2 .= ', ';
                    }else{
                        $j++;
                    }
                    $sql_2 .= '(@AUTO_ID + '.$i.', '.$datablob.')';
                }

            }
            //$executionEndTime = microtime(true);
            //$seconds = $executionEndTime - $executionStartTime;
            //$this->echo("Generating sql string took ". $seconds ." seconds.");
            $sql = $sql_1 . $sql_2 . '; SELECT 1;';
            //$this->echo($sql);
            try{
                //$executionStartTime = microtime(true);
                $result = @$this->db->multi_select($sql);
                /*while ($this->db->more_results() && $this->db->next_result()){
                    // Finishing query
                }*/
                //$executionEndTime = microtime(true);
                //$seconds = $executionEndTime - $executionStartTime;
                //$this->echo("NOTICE: Inserting in the database took ". $seconds ." seconds.");
                $this->send_packet(0xD2,strrev(pack("L", $this->prev_cycle_counter)));

                return 0;
            }catch(\Database\MySQLException $e){
                $this->error("MySQL error - ". $e->getMessage() ."");
                throw $e;
            }

            //' INSERT INTO `measurement_datasets` (`measurement_id`, `cyclecounter`, `state`) '.
            //    ' VALUES ('.$this->measurement_id.', '.$cycle_counter.', '.ord($dataset[$len-1]).'); '.
            //    ' INSERT INTO `measurement_datablobs` (`dataset_id`, `instrument_id`, `data`, `state`) '.
            //    ' VALUES (LAST_INSERT_ID(), 1, "'.\addslashes($data).'", '.ord($dataset[$len-1]).');';
            //    //.\addslashes(substr($dataset,4,$len-5)).'); ';

        }

        public function on_max_cycle(){
            $this->send_packet(0xFE);
        }

        protected function send_packet($fc, $tx_data = ""){
            $len = strlen($tx_data) + 1;
            $tx_packet = chr(104).chr($len/256).chr($len).chr($len/256).chr($len).chr(104);
            $tx_packet .= chr($fc).$tx_data;
            $tx_packet .= $this->crc16($fc, $tx_data).chr(22);
                        
            socket_write($this->socket,$tx_packet,strlen($tx_packet));
        }

        protected function crc16($fc, $data){
            $int = $fc;
            for($i = 0; $i < strlen($data); $i++){
                $int += ord($data[$i]);
            }
            return chr((int)floor($int/256)).chr($int%256);
        }
    }


    $tcp = new \TCP\Socket("0.0.0.0",(int)$_ENV['TCP_PORT']);
    $tcp->setVerbose(true);
    $tcp->setTimeout(0, 30);
    $tcp->setStreamClass("\DataStream");
    $tcp->init();
    $tcp->run();