<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class QuestionnaireCategory extends Model
{


    public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class);
    }
}
