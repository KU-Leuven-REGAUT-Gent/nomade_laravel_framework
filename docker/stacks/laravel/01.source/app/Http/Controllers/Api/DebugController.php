<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DebugController extends Controller
{
    public function errorPage($errorPage){
        return abort($errorPage);
    }
}
