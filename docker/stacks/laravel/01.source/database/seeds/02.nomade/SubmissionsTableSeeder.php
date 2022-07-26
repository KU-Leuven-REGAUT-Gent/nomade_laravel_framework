<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SubmissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $sql = file_get_contents(__DIR__ . '/dumps/submissions.sql');
        DB::unprepared($sql);
        Schema::enableForeignKeyConstraints();
        # old code
        // $sql = file_get_contents(__DIR__ . '/dumps/QNR_SBM_questionnaires.sql');
        // DB::unprepared($sql);
        // $sql = "INSERT IGNORE INTO `submissions` (`id`, `questionnaire_id`, `user_id`, `started_at`, `finished_at`, `created_at`, `next_submission_id`)
        //         SELECT  `id`,
        //                 `qnr_id` AS 'questionnaire_id',
        //                 `user_id`,
        //                 FROM_UNIXTIME(`start_millis`/1000) AS 'started_at',
        //                 FROM_UNIXTIME(`stop_millis`/1000) AS 'finished_at',
        //                 FROM_UNIXTIME(`process_millis`/1000) AS 'created_at',
        //                 IF(`sbm_edit_id`=0,null,`sbm_edit_id`) AS 'next_submission_id'
        //         FROM `QNR_SBM_questionnaires` ORDER BY `id` DESC;";
        // DB::statement($sql);
        // Schema::dropIfExists('QNR_SBM_questionnaires');
    }
}
