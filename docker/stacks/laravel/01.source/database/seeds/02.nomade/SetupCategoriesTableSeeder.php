<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SetupCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Get sql dump
        $sql = file_get_contents(__DIR__ . '/dumps/setup_categories.sql');
        DB::unprepared($sql);

        # old code
        // $sql = "INSERT INTO `setup_groups`(`id`, `name_en`)
        //         SELECT  `id`,
        //                 'Unnamed setup group' AS 'name_en'
        //         FROM `setups_groups`;";

        // DB::statement($sql);

        // Schema::dropIfExists('setups_groups');
    }
}
