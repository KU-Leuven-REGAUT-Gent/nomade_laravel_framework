<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class SetupCategory extends Model
{
    public function setups()
    {
        return $this->hasMany(Setup::class);
    }
}
