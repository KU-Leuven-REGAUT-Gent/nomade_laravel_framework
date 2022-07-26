<?php

namespace App;



class Company extends Model
{
    //

    public function users()
    {
        return $this->hasMany(User::class);
    }

    /*public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class);
    }*/

    public function setups()
    {
        return $this->hasMany(Setup::class);
    }
}