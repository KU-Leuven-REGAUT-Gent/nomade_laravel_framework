<?php

namespace Seed\Nomade;

use App\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InstrumentTypeCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Get sql dump
        $sql = file_get_contents(__DIR__ . '/dumps/instrument_type_categories.sql');
        DB::unprepared($sql);

        # old code
        // DB::table('instrument_type_categories')->insert([
        //     self::seedInstrumentTypeCategory(1,'Joystick',1),
        //     self::seedInstrumentTypeCategory(2,'IMU',2),
        //     self::seedInstrumentTypeCategory(3,'GPS',3),
        //     self::seedInstrumentTypeCategory(4,'CAN Node',4),
        //     self::seedInstrumentTypeCategory(5,'Software Instrument',5),
        //     self::seedInstrumentTypeCategory(6,'RTC',6),
        //     self::seedInstrumentTypeCategory(7,'USB',7),
        //     self::seedInstrumentTypeCategory(8,'Base',8),
        //     self::seedInstrumentTypeCategory(9,'Joystick profile',69),
        //     self::seedInstrumentTypeCategory(10,'AAMS',99),
        //     self::seedInstrumentTypeCategory(11,'Wheelchair Template',99),
        //     self::seedInstrumentTypeCategory(12,'Body Template',99),
        // ]);
    }

    // protected static function seedInstrumentTypeCategory($id, $name, $order){

    //     return [
    //         'id' => $id,
    //         'name_en' => $name,
    //         'order' => $order
    //     ];
    // }
}
