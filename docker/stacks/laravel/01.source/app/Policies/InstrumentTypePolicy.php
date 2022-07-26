<?php

namespace App\Policies;

class InstrumentTypePolicy extends Policy
{
    public function __construct(){
        $this->model = 'instrumentType';
    }
}
