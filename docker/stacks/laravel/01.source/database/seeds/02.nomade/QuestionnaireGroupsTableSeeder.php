<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class QuestionnaireGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(__DIR__ . '/dumps/questionnaire_groups.sql');
        DB::unprepared($sql);
        # old code
        // // Creating DATABASE STP_parameters
        // $sql = file_get_contents(__DIR__ . '/dumps/QNR_questionnaires_groups.sql');
        // DB::unprepared($sql);

        // $sql = "INSERT INTO `questionnaire_groups`(`id`, `name_en`)
        //         SELECT  `id`,
        //                 'Unnamed questionnaire group' AS 'name_en'
        //         FROM `QNR_questionnaires_groups`;";

        // DB::statement($sql);

        // Schema::dropIfExists('QNR_questionnaires_groups');
    }
}
