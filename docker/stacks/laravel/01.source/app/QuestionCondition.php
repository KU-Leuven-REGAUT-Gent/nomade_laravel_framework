<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class QuestionCondition extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
