<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class QuestionConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(__DIR__ . '/dumps/question_conditions.sql');
        DB::unprepared($sql);
        # old code
        // $sql = file_get_contents(__DIR__ . '/dumps/QNR_questions_condition.sql');
        // DB::unprepared($sql);
        // $sql = "INSERT IGNORE INTO `question_conditions` (`question_id`, `condition_question_id`, `condition_answer_id`)
        //         SELECT  `question_id`,
        //                 `condition_question_id`,
        //                 `condition_answer_id`
        //         FROM `QNR_questions_condition`;";
        // DB::statement($sql);
        // Schema::dropIfExists('QNR_questions_condition');
    }

}
