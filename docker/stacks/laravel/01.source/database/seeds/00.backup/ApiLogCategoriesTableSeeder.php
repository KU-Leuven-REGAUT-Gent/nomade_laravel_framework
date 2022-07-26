<?php

namespace Seed\Backup;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ApiLogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('api_log_categories')->insert([
            self::seedApiLogCategory( 1, 99, 'Uncategorized'    , '/api(\/.*)?/'),
            self::seedApiLogCategory( 2, 0, 'General'           , '/api\/(conn)(\/.*)?/'),
            self::seedApiLogCategory( 3, 5, 'Questionnaires'    , '/api\/(question(naire)?s|answers)(\/.*)?/'),
            self::seedApiLogCategory( 4, 5, 'Submissions'       , '/api\/(sumbissions)(\/.*)?/'),
            self::seedApiLogCategory( 5, 10, 'Setups'           , '/api\/(setups)(\/.*)?/'),
            self::seedApiLogCategory( 6, 11, 'Instruments'      , '/api\/(instruments)\/.*/'),
            self::seedApiLogCategory( 7, 11, 'Instrument Types' , '/api\/(instrument(_t|T)ypes)(\/.*)?/'),
            self::seedApiLogCategory( 8, 13, 'Measurements'     , '/api\/(measurements)(\/.*)?/'),
            self::seedApiLogCategory( 9, 20, 'Users'            , '/api\/(users)(\/.*)?/'),
            self::seedApiLogCategory( 10, 21,'Companies'        , '/api\/(companies)(\/.*)?/'),
            self::seedApiLogCategory( 11, 12,'Parameters'       , '/api\/(parameters)(\/.*)?/'),
        ]);
    }

    protected static function seedApiLogCategory($id, $order, $name, $regex){
        return [
            'id'                => $id,
            'order'             => $order,
            'name'              => $name,
            'regex'             => $regex,
        ];
    }
}
