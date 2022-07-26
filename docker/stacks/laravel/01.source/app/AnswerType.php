<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class AnswerType extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
