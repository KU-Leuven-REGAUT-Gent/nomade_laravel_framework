<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(__DIR__ . '/dumps/answers.sql');
        DB::unprepared($sql);

        # old code
        /* DUMP WAS GENERATED USING THE FOLLOWING QUERY ON THE EDUCAT DB
        -----------------------------------------------------------------------------
        SELECT `QNR_answers`.*, `QNR_questions_answers`.`question_id`, `QNR_questions_answers`.`sequence` FROM `QNR_questions_answers`
        INNER JOIN `QNR_answers`
        ON `QNR_answers`.`id` = `QNR_questions_answers`.`answer_id`;
        -----------------------------------------------------------------------------
        */

        // $sql = file_get_contents(__DIR__ . '/dumps/QNR_questions_answers.sql');
        // DB::unprepared($sql);
        // $sql = "INSERT INTO `answers`(`id`, `question_id`,`sequence`, `name_en`)
        //         SELECT  `answer_id` as 'id',
        //                 `question_id`,
        //                 `sequence`,
        //                 '' AS 'name_en'
        //         FROM `QNR_questions_answers`;";
        // DB::statement($sql);
        // Schema::dropIfExists('QNR_questions_answers');

        // $sql = file_get_contents(__DIR__ . '/dumps/QNR_answers.sql');
        // DB::unprepared($sql);
        // $sql = "UPDATE `answers` dst, `QNR_answers` src
        //         SET     dst.`answer_type_id`=src.`answer_type_id`,
        //                 dst.`name_en`=src.`value1`,
        //                 dst.`name_nl`=src.`value2`,
        //                 dst.`name_fr`=src.`value3`,
        //                 dst.`description_en`=src.`tooltip1`,
        //                 dst.`description_nl`=src.`tooltip2`,
        //                 dst.`description_fr`=src.`tooltip3`
        //         WHERE dst.`id` = src.`id`;";
        // DB::statement($sql);
        // Schema::dropIfExists('QNR_answers');
    }
}
