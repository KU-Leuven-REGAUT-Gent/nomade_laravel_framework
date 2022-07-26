<?php

namespace Seed\Nomade;

use App\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QuestionnaireCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Get sql dump
        $sql = file_get_contents(__DIR__ . '/dumps/questionnaire_categories.sql');
        DB::unprepared($sql);

        # old code
        // DB::table('questionnaire_categories')->insert([
        //     self::seedQuestionnaireCategory(1,'Uncategorized'),
        //     self::seedQuestionnaireCategory(2,'Development'),
        //     self::seedQuestionnaireCategory(3,'Production'),
        // ]);
    }

    // protected static function seedQuestionnaireCategory($id, $name){

    //     return [
    //         'id' => $id,
    //         'name_en' => $name
    //     ];
    // }
}
