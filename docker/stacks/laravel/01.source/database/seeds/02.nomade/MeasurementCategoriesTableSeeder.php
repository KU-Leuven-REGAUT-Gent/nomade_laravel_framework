<?php

namespace Seed\Nomade;

use App\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MeasurementCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         # Get sql dump
         $sql = file_get_contents(__DIR__ . '/dumps/measurement_categories.sql');
         DB::unprepared($sql);
 
         # old code
        // DB::table('measurement_categories')->insert([
        //     self::seedMeasurementCategory(1,'Uncategorized'),
        //     self::seedMeasurementCategory(2,'Development'),
        //     self::seedMeasurementCategory(3,'Production'),
        // ]);
    }

    // protected static function seedMeasurementCategory($id, $name){

    //     return [
    //         'id' => $id,
    //         'name_en' => $name
    //     ];
    // }
}
