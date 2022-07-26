<?php

namespace App;


use Illuminate\Pipeline\Pipeline;

class QuestionnaireGroup extends Model
{
    public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class);
    }
}
