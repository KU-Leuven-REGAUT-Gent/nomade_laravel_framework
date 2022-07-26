<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class InstrumentType extends Model
{
    public function parameters()
    {
        return $this->belongsToMany(Parameter::class)->withPivot(['value','min','max','created_at','updated_at','created_by','updated_by']);
    }

    public function category()
    {
        return $this->belongsTo(InstrumentTypeCategory::class,'instrument_type_category_id');
    }

}
