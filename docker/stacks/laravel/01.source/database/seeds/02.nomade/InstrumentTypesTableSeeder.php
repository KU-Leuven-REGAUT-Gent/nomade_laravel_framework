<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InstrumentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Get sql dump
        $sql = file_get_contents(__DIR__ . '/dumps/instrument_types.sql');
        DB::unprepared($sql);

        # old code
        // $sql = "INSERT INTO `instrument_types`(`id`, `instrument_type_category_id`, `name_en`, `description_en`)
        //         (
        //             SELECT  t1.`id`,
        //                 t2.`id` AS 'instrument_type_category_id',
        //                 t1.`name` AS 'name_en',
        //                 t1.`description` AS 'description_en'
        //             FROM `instrument_types` as t1
        //             LEFT JOIN `instrument_type_categories` as t2
        //             ON t1.`category` = t2.`name_en`
        //         );";
        // DB::statement($sql);
        // Schema::dropIfExists('instrument_types');
    }
}
