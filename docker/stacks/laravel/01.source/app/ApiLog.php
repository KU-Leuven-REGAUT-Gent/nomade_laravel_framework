<?php

namespace App;

use Illuminate\Pipeline\Pipeline;

class ApiLog extends Model
{
    public static function allApiLogs(){
        return app(Pipeline::class)
            ->send(ApiLog::query())
            ->thenReturn()
            ->orderBy('id','desc')
            ->paginate(50);
    }

    public function category()
    {
        return $this->belongsTo(ApiLogCategory::class,'api_log_category_id');
    }
}
