<?php

namespace App\Policies;

class QuestionnaireGroupPolicy extends Policy
{
    public function __construct(){
        $this->model = 'questionnaireGroup';
    }
}
