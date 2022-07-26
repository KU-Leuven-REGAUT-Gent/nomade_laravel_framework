<?php

namespace App\Policies;

class MeasurementPolicy extends Policy
{
    public function __construct(){
        $this->model = 'measurement';
    }
}
