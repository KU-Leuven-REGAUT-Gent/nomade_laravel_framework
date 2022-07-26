<?php

namespace Seed\Nomade;

use App\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(__DIR__ . '/dumps/questions.sql');
        DB::unprepared($sql);

        # old code
        // $sql = file_get_contents(__DIR__ . '/dumps/QNR_questionnaires_questions.sql');
        // DB::unprepared($sql);
        // $sql = "INSERT INTO `questions`(`id`, `questionnaire_id`,`sequence`, `name_en`)
        //         SELECT  `question_id` as 'id',
        //                 `questionnaire_id`,
        //                 `sequence`,
        //                 '' AS 'name_en'
        //         FROM `QNR_questionnaires_questions`;";
        // DB::statement($sql);
        // Schema::dropIfExists('QNR_questionnaires_questions');

        // $sql = file_get_contents(__DIR__ . '/dumps/QNR_questions.sql');
        // DB::unprepared($sql);
        // $sql = "UPDATE `questions` dst, `QNR_questions` src
        //         SET     dst.`question_type_id`=src.`bullet_type` + 1,
        //                 dst.`name_en`=src.`question1`,
        //                 dst.`name_nl`=src.`question2`,
        //                 dst.`name_fr`=src.`question3`,
        //                 dst.`description_en`=src.`tooltip1`,
        //                 dst.`description_nl`=src.`tooltip2`,
        //                 dst.`description_fr`=src.`tooltip3`,
        //                 dst.`conditional`=src.`conditional`
        //         WHERE dst.`id` = src.`id`;";
        // DB::statement($sql);
        // Schema::dropIfExists('QNR_questions');
    }
}
