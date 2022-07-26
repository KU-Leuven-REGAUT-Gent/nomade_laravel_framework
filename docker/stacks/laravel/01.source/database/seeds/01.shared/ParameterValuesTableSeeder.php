<?php

namespace Seed\Shared;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ParameterValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Creating DATABASE STP_parameter_value_description
       $sql = file_get_contents(__DIR__ . '/dumps/parameter_values.sql');
      
       DB::unprepared($sql);

    //    $sql = " INSERT INTO `parameter_values` (`parameter_id`, `name_en`, `name_nl`, `name_fr`, `description_en`, `description_nl`, `description_fr`, `value`, `documentation`, `table` )
    //             SELECT  `id` AS 'parameter_id',
    //                     `name_en` AS 'name_en',
    //                     `description_en` AS 'description_en',
    //                     `value`
    //             FROM `parameter_values`;";
    //    DB::statement($sql);

    //    Schema::dropIfExists('parameter_values');
    }
}
