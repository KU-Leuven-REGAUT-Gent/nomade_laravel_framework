<?php

namespace Seed\Backup;

use App\ApiLog;
use App\ApiLogCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ApiLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(__DIR__ . '/dumps/2020-07-16 - api_logs.sql');
        DB::unprepared($sql);

        foreach(ApiLog::all() as $ApiLog){
            foreach(ApiLogCategory::all()->sortBy('order') as $ApiLogCategory){
                if(preg_match($ApiLogCategory->regex, $ApiLog->path)){
                    $ApiLog->api_log_category_id = $ApiLogCategory->id;
                    $ApiLog->save();
                    break;
                }
            }
        }

    }
}
