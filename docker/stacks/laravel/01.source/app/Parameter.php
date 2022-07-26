<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class Parameter extends Model
{
    /**
     * Converts all Date Formats to milliseconds.
     *
     * @return string
     */
    public function values()
    {
        return $this->hasMany(ParameterValue::class);
    }
}
