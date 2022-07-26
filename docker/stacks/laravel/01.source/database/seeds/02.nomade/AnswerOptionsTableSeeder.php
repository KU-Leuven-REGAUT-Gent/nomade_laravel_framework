<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AnswerOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(__DIR__ . '/dumps/answer_options.sql');
        DB::unprepared($sql);

        # old code
        // $sql = "INSERT IGNORE INTO `answer_options`(`answer_id`, `min`, `max`)
        //         SELECT  `answer_id`,
        //                 `min`,
        //                 `max`
        //         FROM `QNR_answers_options`;";
        // DB::statement($sql);
        // Schema::dropIfExists('QNR_answers_options');
    }

}
