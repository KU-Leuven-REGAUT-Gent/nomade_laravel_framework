<?php

namespace Seed\Essential;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class QuestionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Get sql dump
        $sql = file_get_contents(__DIR__ . '/dumps/question_types.sql');
        DB::unprepared($sql);

        # old code
        // DB::table('question_types')->insert([
        //     self::seedQuestionType(1,'Separate Answers (None)'),
        //     self::seedQuestionType(2,'One answer (Radio buttons)'),
        //     self::seedQuestionType(3,'Multiple Answers (Checkboxes)'),
        //     self::seedQuestionType(4,'Body Chart (Experimental)'),
        // ]);
    }

    // protected static function seedQuestionType($id, $name, $description = null){

    //     return [
    //         'id' => $id,
    //         'name_en' => $name,
    //         'description_en' => $description,
    //     ];
    // }
}
