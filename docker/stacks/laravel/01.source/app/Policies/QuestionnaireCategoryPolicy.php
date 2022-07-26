<?php

namespace App\Policies;

class QuestionnaireCategoryPolicy extends Policy
{
    public function __construct(){
        $this->model = 'questionnaireCategory';
    }
}
