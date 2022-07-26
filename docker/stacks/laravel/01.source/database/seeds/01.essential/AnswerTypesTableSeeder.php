<?php

namespace Seed\Essential;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AnswerTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Get sql dump
        $sql = file_get_contents(__DIR__ . '/dumps/answer_types.sql');
        DB::unprepared($sql);

        # old code
        // DB::table('answer_types')->insert([
        //     self::seedAnswerType(1,'Fixed'),
        //     self::seedAnswerType(10,'Integer'),
        //     self::seedAnswerType(11,'Double'),
        //     self::seedAnswerType(20,'Scale'),
        //     self::seedAnswerType(25,'Yes/No'),
        //     self::seedAnswerType(30,'Date'),
        //     self::seedAnswerType(31,'Date (Past)'),
        //     self::seedAnswerType(32,'Date (Future)'),
        //     self::seedAnswerType(33,'Datetime'),
        //     self::seedAnswerType(34,'Datetime (Past)'),
        //     self::seedAnswerType(35,'Datetime (Future)'),
        //     self::seedAnswerType(36,'Time (hh:mm)'),
        //     self::seedAnswerType(37,'Time (hh:mm:ss)'),
        //     self::seedAnswerType(98,'Optional custom'),
        //     self::seedAnswerType(99,'Mandatory custom'),
        // ]);
    }

    // protected static function seedAnswerType($id, $name, $description = null){
    //     return [
    //         'id'                => $id,
    //         'name_en'           => $name,
    //         'description_en'    => $description,
    //     ];
    // }
}
