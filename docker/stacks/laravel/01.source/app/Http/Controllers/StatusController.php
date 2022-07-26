<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $statusses = [
            'ExpectsJSON' => $request->expectsJson(),
        ];


        //dd($request);
        return view('status.index', compact('statusses'));
    }

}
