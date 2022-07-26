<?php

namespace App;

use Illuminate\Database\Eloquent;

class MeasurementDataset extends Eloquent\Model
{
    public function measurement()
    {
        return $this->belongsTo(Measurement::class);
    }

    public function datablobs()
    {
        return $this->hasMany(MeasurementDatablob::class,'measurement_dataset_id');
    }
}
