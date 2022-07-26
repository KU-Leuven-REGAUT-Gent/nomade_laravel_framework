<?php

namespace App\Policies;

class UserPolicy extends Policy
{
    public function __construct(){
        $this->model = 'user';
    }
}
