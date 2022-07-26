<?php

namespace App\Policies;

use App\User;

class QuestionnairePolicy extends Policy
{
    public function __construct(){
        $this->model = 'questionnaire';
    }

    protected function hasAnyPermission(User $user, $model = null, $method = null){        
        if(isset($model) && $model['draft']){
            return parent::hasAnyPermission($user, $model, 'draft.'.$method) || parent::hasAnyPermission($user, $model, $method);
        }else{
            return parent::hasAnyPermission($user, $model, $method);
        }
    }
}
