<?php

namespace App\Policies;

class ParameterValuePolicy extends Policy
{
    public function __construct(){
        $this->model = 'parameterValue';
    }
}
