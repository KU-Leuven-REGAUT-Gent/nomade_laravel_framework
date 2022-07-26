<?php

namespace Seed\Nomade;

use App\InstrumentType;
use App\InstrumentTypeCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InstrumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Get sql dump
        $sql = file_get_contents(__DIR__ . '/dumps/instruments.sql');
        DB::unprepared($sql);

        # old code
        // $instrumentTypeCategory = new InstrumentTypeCategory();
        // $instrumentTypeCategory->name_en = "Dummy instrumentTypeCategory for Database Seeding";
        // $instrumentTypeCategory->save();
        // $instrumentType = new InstrumentType();
        // $instrumentType->instrument_type_category_id = $instrumentTypeCategory->id;
        // $instrumentType->name_en = "Dummy instrumentType for Database Seeding";
        // $instrumentType->save();

        // // $sql = file_get_contents(__DIR__ . '/dumps/STP_setups_instruments.sql');
        // // DB::unprepared($sql);
        // // $sql = "INSERT IGNORE INTO `instruments`(`id`, `setup_id`, `instrument_type_id`, `name_en`)
        // //         SELECT  `instrument_id` AS 'id',
        // //                 `setup_id`,
        // //                 " . $instrumentType->id ." AS 'instrument_type_id',
        // //                 '' AS 'name_en'
        // //         FROM `STP_setups_instruments`;";
        // // DB::statement($sql);
        // // Schema::dropIfExists('STP_setups_instruments');

        // $sql = file_get_contents(__DIR__ . '/dumps/instruments.sql');
        // DB::unprepared($sql);
        // $sql = "UPDATE `instruments` dst, `instruments` src
        //         SET     dst.`instrument_type_id`=src.`instrument_type_id`,
        //                 dst.`name_en`=src.`name`,
        //                 dst.`description_en`=src.`description`
        //         WHERE dst.`id` = src.`id`;";
        // DB::statement($sql);
        // Schema::dropIfExists('instruments');

        // $instrumentType->forceDelete();
        // $instrumentTypeCategory->forceDelete();

    }
}
