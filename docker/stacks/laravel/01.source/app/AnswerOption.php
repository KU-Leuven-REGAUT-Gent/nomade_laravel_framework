<?php

namespace App;


use Illuminate\Pipeline\Pipeline;

class AnswerOption extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */




    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
