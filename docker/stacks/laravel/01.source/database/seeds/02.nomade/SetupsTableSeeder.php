<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SetupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       # Get sql dump
       $sql = file_get_contents(__DIR__ . '/dumps/setups.sql');
       DB::unprepared($sql);

       # old code
        // $sql = "INSERT INTO `setups`(`id`, `setup_group_id`, `name_en`, `hw_identifier`, `version`, `locked`)
        //         SELECT  `id`,
        //                 `group_id` AS 'setup_group_id',
        //                 `name` AS 'name_en',
        //                 `hw_identifier`,
        //                 `version`,
        //                 `locked`
        //         FROM `setups`;";
        // DB::statement($sql);
        
    }
}
