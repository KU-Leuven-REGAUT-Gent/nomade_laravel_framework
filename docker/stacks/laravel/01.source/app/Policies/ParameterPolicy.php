<?php

namespace App\Policies;

class ParameterPolicy extends Policy
{
    public function __construct(){
        $this->model = 'parameter';
    }
}
