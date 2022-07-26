<?php

namespace App\Policies;

class SetupPolicy extends Policy
{
    public function __construct(){
        $this->model = 'setup';
    }
}
