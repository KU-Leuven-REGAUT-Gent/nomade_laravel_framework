<?php

namespace App;


use Illuminate\Pipeline\Pipeline;

class InstrumentTypeCategory extends Model
{
    public function instrumentTypes()
    {
        return $this->hasMany(InstrumentType::class);
    }
}
