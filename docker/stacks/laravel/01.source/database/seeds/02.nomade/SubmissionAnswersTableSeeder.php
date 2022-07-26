<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SubmissionAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(__DIR__ . '/dumps/submission_answers.sql');
        DB::unprepared($sql);
        
        # old code
        // $sql = file_get_contents(__DIR__ . '/dumps/QNR_SBM_ANS.sql');
        // DB::unprepared($sql);
        // $sql = file_get_contents(__DIR__ . '/dumps/QNR_SBM_ANS_number.sql');
        // DB::unprepared($sql);
        // $sql = file_get_contents(__DIR__ . '/dumps/QNR_SBM_ANS_custom.sql');
        // DB::unprepared($sql);
        // $sql = "INSERT IGNORE INTO `submission_answers` (`id`, `submission_id`, `question_id`, `answer_id`, `value`)
        //         (   SELECT  `QNR_SBM_ANS`.`id` AS 'id',
        //                     `QNR_SBM_ANS`.`sbm_id` AS 'submission_id',
        //                     `QNR_SBM_ANS`.`qn_id` AS 'question_id',
        //                     `QNR_SBM_ANS`.`ans_id` AS 'answer_id',
        //                     `union`.`value` AS 'value'
        //             FROM `QNR_SBM_ANS`
        //             LEFT JOIN (
        //                 SELECT `id`, `text` AS `value` FROM `QNR_SBM_ANS_custom`
        //                 UNION
        //                 SELECT `id`, `number` AS `value` FROM `QNR_SBM_ANS_number`
        //             ) AS `union`
        //             ON `union`.`id` = `QNR_SBM_ANS`.`id`
        //         );";
        // DB::statement($sql);
        // Schema::dropIfExists('QNR_SBM_ANS');
        // Schema::dropIfExists('QNR_SBM_ANS_number');
        // Schema::dropIfExists('QNR_SBM_ANS_custom');
    }
}
