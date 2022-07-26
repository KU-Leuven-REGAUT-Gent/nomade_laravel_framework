<?php

use Illuminate\Database\Seeder;
use App\User;

class GeneratePasswords extends Seeder
{
    public function run()
    {
        echo("BEGIN GENERATION PASSWORDS for ".config('app.realm')."\n-------------------------------------\n");
        $users = User::all();
        foreach($users as $user){
            self::generatorPassword($user);
        }
        echo("-------------------------------------\END GENERATION PASSWORDS\n");

    }

    protected static function generatorPassword(User $user){
        $password_raw = self::randomPassword();
        $user->password = Hash::make($password_raw);
        $user->HA1 = md5($user->name.':'.config('app.realm')."_api".':'.$password_raw);
        $user->update();
        echo($user->name . "    " . $password_raw . "\n");

    }
    protected static function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
}