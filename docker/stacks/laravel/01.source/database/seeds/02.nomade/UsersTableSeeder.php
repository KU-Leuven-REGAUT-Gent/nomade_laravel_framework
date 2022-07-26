<?php

namespace Seed\Nomade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            self::seedUser(1, 'nomade', '2022')]);
        }
    
        protected static function seedUser($id, $name, $password_raw, $company = null){
            return [
                'id'         => $id,
                'username'       => $name,
                'password'   => Hash::make($password_raw),
                'HA1'        => md5($name.':'.config('app.name')."_api".':'.$password_raw),
                'company_id' => ($company==null?18:(is_int($company)?$company:Company::where('name','=',$company)->first()->id)),
            ];
        }     
}
