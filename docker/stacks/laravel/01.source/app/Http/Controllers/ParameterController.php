<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Parameter;
use App\Repositories\SetupRepository;

class ParameterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $this->authorize('index', Parameter::class);
        $parameters = Parameter::all();
        return view('parameter.index', compact('parameters'));
    }

    public function show(Parameter $parameter){
        $this->authorize('show', Parameter::class);
        $parameter->load('values');
        return view('parameter.show', compact('parameter'));
    }

    public function defineJava(){
        $defines = $this->defines();
        return response()->view('parameter.define.java', compact('defines'))->header('Content-Type', 'text/plain');
    }

    public function defineCpp(){
        $defines = $this->defines();
        return response()->view('parameter.define.cpp', compact('defines'))->header('Content-Type', 'text/plain');
    }

    private function defines(){
        $this->authorize('index', Parameter::class);
        $parameters = Parameter::all();
        $parameters->load(['values']);
        $defines = array();
        foreach($parameters as $parameter){
            $define['variable'] = "SETUP_PRM_" . $this->generateSlugFrom($parameter->uuid);
            $define['value'] = $parameter->hexId;
            $define['description'] = preg_replace('/(\n|\r)/', ' ', $parameter->description);
            $define['options'] = array();
            foreach($parameter->values as $parameterValue){
                $option['variable'] = $define['variable'] . "_option_" . $this->generateSlugFrom($parameterValue->name);
                $option['value'] = $parameterValue->hexValue;
                $option['description'] = preg_replace('/(\n|\r)/', ' ', $parameterValue->name);
                $define['options'][] = $option;
            }
            $defines[]=$define;
        }
        return $defines;
    }

    private function generateSlugFrom($string) {
        // Replace all special characters with underscores
        $string = preg_replace('/[^\da-z]/i', '_', trim($string));
        // Replace all double underscores by single underscores
        $string = str_replace('__', '_', trim($string, '_'));
        // Uppercase the string
        $string = strtoupper($string);
        return $string;
    }

}
