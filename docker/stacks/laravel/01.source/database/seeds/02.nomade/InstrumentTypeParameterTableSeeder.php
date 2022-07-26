<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InstrumentTypeParameterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Get sql dump
        $sql = file_get_contents(__DIR__ . '/dumps/instrument_type_parameter.sql');
        DB::unprepared($sql);

        # old code
        // $sql = file_get_contents(__DIR__ . '/dumps/instrument_type_parameter.sql');
        // DB::unprepared($sql);
        // $sql = "INSERT IGNORE INTO `instrument_type_parameter`(`instrument_type_id`, `parameter_id`, `value`, `min`, `max`)
        //         SELECT  `instrument_type_id`,
        //                 `parameter_id`,
        //                 `value`,
        //                 `min`,
        //                 `max`
        //         FROM `instrument_type_parameter`;";
        // DB::statement($sql);
        // Schema::dropIfExists('instrument_type_parameter');
    }
}
