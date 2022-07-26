<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class Instrument extends Model
{
    public function setup()
    {
        return $this->belongsTo(Setup::class);
    }

    public function type()
    {
        return $this->belongsTo(InstrumentType::class,'instrument_type_id');
    }

    public function parameters()
    {
        //return $this->belongsToMany(Parameter::class)->withPivot(['value','created_at','updated_at','created_by','updated_by']);
        return $this->belongsToMany(Parameter::class)->withPivot(['value']);
    }
}
