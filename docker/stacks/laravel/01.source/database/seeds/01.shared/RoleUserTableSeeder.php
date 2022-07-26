<?php

namespace Seed\Shared;

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
            self::seedRoleUser('frederic.depuydt@kuleuven.be','User Type 1');
            self::seedRoleUser('frederic.depuydt@kuleuven.be','User Type 2');
            self::seedRoleUser('frederic.depuydt@kuleuven.be','User Type 3');
            self::seedRoleUser('frederic.depuydt@kuleuven.be','User Type 4');
            self::seedRoleUser('frederic.depuydt@kuleuven.be','Debug');
            self::seedRoleUser('frederic.depuydt@kuleuven.be','Developer');

            self::seedRoleUser('FD_UT1', 'User Type 1');
            self::seedRoleUser('FD_UT2', 'User Type 1');
            self::seedRoleUser('FD_UT2', 'User Type 2');
            self::seedRoleUser('FD_UT3', 'User Type 1');
            self::seedRoleUser('FD_UT3', 'User Type 2');
            self::seedRoleUser('FD_UT3', 'User Type 3');
            self::seedRoleUser('FD_UT4', 'User Type 1');
            self::seedRoleUser('FD_UT4', 'User Type 2');
            self::seedRoleUser('FD_UT4', 'User Type 3');
            self::seedRoleUser('FD_UT4', 'User Type 4');
            self::seedRoleUser('FD_DEV', 'User Type 1');
            self::seedRoleUser('FD_DEV', 'User Type 2');
            self::seedRoleUser('FD_DEV', 'User Type 3');
            self::seedRoleUser('FD_DEV', 'User Type 4');
            self::seedRoleUser('FD_DEV', 'Developer');
            self::seedRoleUser('FD_DEV', 'Debug');

            self::seedRoleUser('MT_UT1', 'User Type 1');
            self::seedRoleUser('MT_UT2', 'User Type 1');
            self::seedRoleUser('MT_UT2', 'User Type 2');
            self::seedRoleUser('MT_UT3', 'User Type 1');
            self::seedRoleUser('MT_UT3', 'User Type 2');
            self::seedRoleUser('MT_UT3', 'User Type 3');
            self::seedRoleUser('MT_UT4', 'User Type 1');
            self::seedRoleUser('MT_UT4', 'User Type 2');
            self::seedRoleUser('MT_UT4', 'User Type 3');
            self::seedRoleUser('MT_UT4', 'User Type 4');
            self::seedRoleUser('MT_DEV', 'User Type 1');
            self::seedRoleUser('MT_DEV', 'User Type 2');
            self::seedRoleUser('MT_DEV', 'User Type 3');
            self::seedRoleUser('MT_DEV', 'User Type 4');
            self::seedRoleUser('MT_DEV', 'Developer');
            self::seedRoleUser('MT_DEV', 'Debug');

            self::seedRoleUser('DD_DEV', 'User Type 1');
            self::seedRoleUser('DD_DEV', 'User Type 2');
            self::seedRoleUser('DD_DEV', 'User Type 3');
            self::seedRoleUser('DD_DEV', 'User Type 4');
            self::seedRoleUser('DD_DEV', 'Developer');
            self::seedRoleUser('DD_DEV', 'Debug');
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
