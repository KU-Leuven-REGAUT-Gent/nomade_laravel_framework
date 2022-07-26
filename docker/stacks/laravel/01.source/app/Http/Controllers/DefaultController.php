<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Setup;

class DefaultController extends Controller
{

    public function home(Request $request){
        return view('home');
    }

    public function about(Request $request){
        return view('about');
    }

}
