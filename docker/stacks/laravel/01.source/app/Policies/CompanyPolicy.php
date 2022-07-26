<?php

namespace App\Policies;

class CompanyPolicy extends Policy
{
    public function __construct(){
        $this->model = 'company';
    }
}
