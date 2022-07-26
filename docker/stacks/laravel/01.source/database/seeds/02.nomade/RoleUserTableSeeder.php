<?php

namespace Seed\Nomade;

use App\User;
use App\Role;
use App\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Get sql dump
        // $sql = file_get_contents(__DIR__ . '/dumps/role_user.sql');
        // DB::unprepared($sql);

        // Stand alone user
        self::seedRoleUser('nomade','User Type 1');
        self::seedRoleUser('nomade','User Type 2');
        self::seedRoleUser('nomade','User Type 3');
        self::seedRoleUser('nomade','User Type 4');
        self::seedRoleUser('nomade','Debug');
        self::seedRoleUser('nomade','Developer');
    }

    protected static function seedRoleUser($username, $role){
        $user_id = (is_int($username)?$username:User::where('username','=',$username)->first()->id);
        $role_id = (is_int($role)?$role:Role::where('name_en','=',$role)->first()->id);

        DB::table('role_user')->updateOrInsert(
            [
                'user_id' => $user_id,
                'role_id' => $role_id
            ],[
                'user_id' => $user_id,
                'role_id' => $role_id
            ]
        );
    }
}
