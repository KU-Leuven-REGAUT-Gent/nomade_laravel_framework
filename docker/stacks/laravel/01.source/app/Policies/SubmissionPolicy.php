<?php

namespace App\Policies;

use App\User;
use App\Submission;

class SubmissionPolicy extends Policy
{
    public function __construct(){
        $this->model = 'submission';
    }

    protected function matchingCompany(User $user, $model = null){        
        if($model == null){
            return true;
        }else{
            return ($model->user->company_id == $user->company_id);
        }
    }

    protected function matchingUser(User $user, $model = null){
        if($model == null){
            return true;
        }else{
            return ($model->user_id == $user->id);
        }
    }
}
