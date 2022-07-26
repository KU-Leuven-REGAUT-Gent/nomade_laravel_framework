<?php

namespace Seed\Shared;

use App\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SetupGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('setup_groups')->insert([
            self::seedSetupGroup(1,'Uncategorized'),
        ]);
    }

    protected static function seedSetupGroup($id, $name){

        return [
            'id' => $id,
            'name_en' => $name
        ];
    }
}
