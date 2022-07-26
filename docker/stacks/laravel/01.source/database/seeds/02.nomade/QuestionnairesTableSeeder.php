<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class QuestionnairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(__DIR__ . '/dumps/questionnaires.sql');
        DB::unprepared($sql);

        # old code
        // $sql = file_get_contents(__DIR__ . '/dumps/QNR_questionnaires.sql');
        // DB::unprepared($sql);

        // $sql = "INSERT INTO `questionnaires`(`id`, `questionnaire_group_id`, `name_en`, `name_nl`, `name_fr`, `description_en`, `description_nl`, `description_fr`, `version`, `draft`, `editable`)
        //         SELECT  `id`,
        //                 `group_id` AS 'questionnaire_group_id',
        //                 `title1` AS 'name_en',
        //                 `title2` AS 'name_nl',
        //                 `title3` AS 'name_fr',
        //                 `description1` AS 'description_en',
        //                 `description2` AS 'description_nl',
        //                 `description3` AS 'description_fr',
        //                 `version`,
        //                 `draft`,
        //                 `editable`
        //         FROM `QNR_questionnaires`;";

        // DB::statement($sql);

        // Schema::dropIfExists('QNR_questionnaires');
    }
}
