<?php

namespace App;

class Measurement extends Model
{
    protected $dates = ["started_at","stopped_at"];

    public function category()
    {
        return $this->belongsTo(MeasurementCategory::class,'measurement_category_id');
    }

    public function datasets()
    {
        return $this->hasMany(MeasurementDataset::class,'measurement_id');
    }
}
