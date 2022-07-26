<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InstrumentParameterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Get sql dump
        $sql = file_get_contents(__DIR__ . '/dumps/instrument_parameter.sql');
        DB::unprepared($sql);
        # old code
        // $sql = "INSERT IGNORE INTO `instrument_parameter`(`instrument_id`, `parameter_id`, `value`)
        //         SELECT  `instrument_id`,
        //                 `parameter_id`,
        //                 `value`
        //         FROM `STP_instrument_parameter_values`;";
        // DB::statement($sql);
        // Schema::dropIfExists('STP_instrument_parameter_values');
    }
}
