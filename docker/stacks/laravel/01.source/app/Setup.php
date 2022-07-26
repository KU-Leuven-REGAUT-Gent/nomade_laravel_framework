<?php

namespace App;

use Illuminate\Pipeline\Pipeline;

class Setup extends Model
{
    public static function allSetups(){
        return app(Pipeline::class)
            ->send(Setup::query())
            ->through([
                \App\QueryFilters\Active::class,
                \App\QueryFilters\Sort::class,
                \App\QueryFilters\MaxCount::class,
            ])
            ->thenReturn()
            ->get();
    }

    public function group()
    {
        return $this->belongsTo(SetupGroup::class,'setup_group_id');
    }

    public function category()
    {
        return $this->belongsTo(SetupCategory::class,'setup_category_id');
    }

    public function instruments()
    {
        return $this->hasMany(Instrument::class);
    }

    public function measurements()
    {
        return $this->hasMany(Measurement::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
