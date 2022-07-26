<?php

namespace Seed\Shared;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ParametersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating DATABASE STP_parameters
        $sql = file_get_contents(__DIR__ . '/dumps/parameters.sql');
        DB::unprepared($sql);
        // old code
        // $sql = "INSERT INTO `parameters`(`id`, `uuid`, `name_en`, `description_en`, `level`, `datatype`, `mainboard`, `value`, `min`, `max`)
        //         SELECT  `id`,
        //                 `name` AS 'uuid',
        //                 `name` AS 'name_en',
        //                 `description` AS 'description_en',
        //                 `level`,
        //                 `datatype`,
        //                 `mainboard`,
        //                 `default` AS 'value',
        //                 `min`,
        //                 `max`
        //         FROM `STP_parameters`;";

        // DB::statement($sql);

        // Schema::dropIfExists('STP_parameters');

    }
}
