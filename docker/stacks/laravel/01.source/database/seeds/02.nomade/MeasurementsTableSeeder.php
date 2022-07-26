<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MeasurementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(__DIR__ . '/dumps/measurements.sql');
        DB::unprepared($sql);
        
        #   old code
        // $sql = file_get_contents(__DIR__ . '/dumps/STP_measurements.sql');
        // DB::unprepared($sql);
        // $sql = file_get_contents(__DIR__ . '/dumps/STP_setups_users.sql');
        // DB::unprepared($sql);

        // $sql = "INSERT INTO `measurements` (`id`, `setup_id`, `user_id`, `name_en`, `max`, `count`, `started_at`, `stopped_at`)
        //         SELECT  m.`id`,
        //                 su.`setup_id`,
        //                 su.`user_id`,
        //                 m.`description` AS 'name_en',
        //                 m.`max`,
        //                 m.`count`,
        //                 IF(m.`start_time`=0,null,FROM_UNIXTIME(m.`start_time`/1000)) AS 'started_at',
        //                 IF(m.`end_time`=0,null,FROM_UNIXTIME(m.`end_time`/1000)) AS 'stopped_at'
        //         FROM `STP_measurements` AS m
        //         INNER JOIN `STP_setups_users` AS su
        //         ON m.`setup_user_id` = su.`id`;";
        // DB::statement($sql);
        // Schema::dropIfExists('STP_measurements');
        // Schema::dropIfExists('STP_setups_users');
    }
}
