<?php

namespace App\Policies;

class ApiLogPolicy extends Policy
{
    public function __construct(){
        $this->model = 'api.log';
    }
}
