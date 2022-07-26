<?php

namespace App;

use Illuminate\Database\Eloquent;

class MeasurementDatablob extends Eloquent\Model
{
    public function dataset()
    {
        return $this->belongsTo(MeasurementDataset::class,'measurement_dataset_id');
    }
}

