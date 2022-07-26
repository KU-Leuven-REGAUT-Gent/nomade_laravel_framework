<?php

namespace App;


use Illuminate\Pipeline\Pipeline;

class MeasurementCategory extends Model
{
    public function measurements()
    {
        return $this->hasMany(Measurement::class);
    }
}
