<?php

namespace Seed\Shared;

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
        //
        DB::table('questionnaire_categories')->insert([
            self::seedQuestionnaireCategory(1,'Uncategorized'),
            self::seedQuestionnaireCategory(2,'Development'),
            self::seedQuestionnaireCategory(3,'Production'),
        ]);
    }

    protected static function seedQuestionnaireCategory($id, $name){

        return [
            'id' => $id,
            'name_en' => $name
        ];
    }
}
