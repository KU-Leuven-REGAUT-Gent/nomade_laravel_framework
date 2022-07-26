<?php

namespace App;

class ApiLogCategory extends Model
{
    public function instrumentTypes()
    {
        return $this->hasMany(ApiLog::class);
    }

    /**
     * Get the model's name.
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->attributes['name'];
    }
}
