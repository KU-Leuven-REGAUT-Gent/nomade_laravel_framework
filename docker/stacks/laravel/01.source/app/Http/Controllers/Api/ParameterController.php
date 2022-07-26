<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Parameter;
use App\Http\Resources\ParameterResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParameterController extends Controller
{
    public function index(){
        //$this->authorize('index', Parameter::class);
        //return $this->setupRepository->all();
        //return SetupResource::collection(Setup::paginate());
        return ParameterResource::collection(Parameter::all()->load('values'));
    }

    public function show(Parameter $parameter){
        //$this->authorize('show', $parameter);
        $parameter->load([
            'values',
        ]);
        return new ParameterResource($parameter);
    }

    /*public function store(){
        return response('Method Not Allowed', 405);
    }*/

    /*public function edit(Setup $setup){
        return response('Method Not Allowed', 405);
    }*/

    /*public function update(Setup $setup){
        return response('Method Not Allowed', 405);
    }*/

    /*public function destroy(Setup $setup){
        return response('Method Not Allowed', 405);
    }*/

    /*protected function validatedData(){
        return request()->validate([
            'name' => 'required|min:5',
            'notes' => '',
        ]);
    }*/













}
