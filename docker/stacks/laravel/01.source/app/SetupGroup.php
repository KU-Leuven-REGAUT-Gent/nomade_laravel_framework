<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class SetupGroup extends Model
{
    public function setups()
    {
        return $this->hasMany(Setup::class);
    }
}
