<?php

namespace Seed\Essential;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Get sql dump
        $sql = file_get_contents(__DIR__ . '/dumps/roles.sql');
        DB::unprepared($sql);

        # old code
        // DB::table('roles')->insert([
        //     self::seedRole(1,'User Type 1'),
        //     self::seedRole(2,'User Type 2'),
        //     self::seedRole(3,'User Type 3'),
        //     self::seedRole(4,'User Type 4'),
        //     self::seedRole(5,'Developer'),
        //     self::seedRole(6,'Debug'),
        //     self::seedRole(8,'Contact App'),
        //     self::seedRole(9,'Guest'),
        // ]);
    }

    // protected static function seedRole($id, $role){

    //     return [
    //         'id' => $id,
    //         'name_en' => $role,
    //     ];
    // }
}
