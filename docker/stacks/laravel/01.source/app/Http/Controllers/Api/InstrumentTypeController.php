<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\InstrumentType;
use App\Http\Resources\InstrumentTypeResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstrumentTypeController extends Controller
{
    public function index(){
        //$this->authorize('index', Parameter::class);
        //return $this->setupRepository->all();
        //return SetupResource::collection(Setup::paginate());
        return InstrumentTypeResource::collection(InstrumentType::all());
    }

    public function show(InstrumentType $instrumentType){
        //$this->authorize('show', $parameter);
        $instrumentType->load([
            'parameters',
        ]);
        $parameters = array();
        foreach($instrumentType->parameters as $parameter){
            $pivot = $parameter['pivot'];
            unset($pivot['instrument_type_id']);
            array_push($parameters,$pivot);
        }
        unset($instrumentType->parameters);
        $instrumentType->parameters = $parameters;
        return new InstrumentTypeResource($instrumentType);
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
