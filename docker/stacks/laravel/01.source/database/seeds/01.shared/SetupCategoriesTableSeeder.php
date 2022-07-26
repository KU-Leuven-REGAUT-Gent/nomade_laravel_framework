<?php

namespace Seed\Shared;

use App\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SetupCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('setup_categories')->insert([
            self::seedSetupCategory(1,'Uncategorized'),
            self::seedSetupCategory(2,'Development'),
            self::seedSetupCategory(3,'Production'),
        ]);
    }

    protected static function seedSetupCategory($id, $name){

        return [
            'id' => $id,
            'name_en' => $name
        ];
    }
}
