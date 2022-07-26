<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Setup;
use App\Instrument;
use App\Http\Resources\InstrumentResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstrumentController extends Controller
{
    public function index(){
        $this->authorize('index', Setup::class);
        //return $this->setupRepository->all();
        //return SetupResource::collection(Setup::paginate());
        return InstrumentResource::collection(Instrument::all());
    }

    public function show(Instrument $instrument){
        $this->authorize('show', $instrument->setup()->first());
        return new InstrumentResource($instrument);
    }

    public function store(){
        $data = $this->validatedData()['data'];
        $setup = Setup::findOrFail($data['setup_id']);
        $this->authorize('edit', $setup);
        $parameters = $data['parameters'];
        unset($data['parameters']);
        $data['created_by'] = Auth::user()->id;
        $data['updated_by'] = Auth::user()->id;
        $instrument = Instrument::create($data);
        foreach($parameters as $parameter){
            $instrument->parameters()->attach($parameter['id'], ['value' => $parameter['value']]);
        }
        return new InstrumentResource($instrument);
    }

    public function update(Instrument $instrument){
        $this->authorize('edit', $instrument->setup()->first());
        $data = $this->validatedData()['data'];
        $parameters = $data['parameters'];
        unset($data['parameters']);
        $data['updated_by'] = Auth::user()->id;
        $instrument->update($data);
        foreach($parameters as $parameter){
            $model = $instrument->parameters()->find($parameter['id']);
            if ($model == null){
                $instrument->parameters()->attach($parameter['id'], ['value' => $parameter['value']]);
            }else{
                $instrument->parameters()->updateExistingPivot($parameter['id'], ['value' => $parameter['value']]);
            }
        }
        return new InstrumentResource($instrument);
    }

    public function destroy(Instrument $instrument){
        $this->authorize('edit', $instrument->setup()->first());
        $instrument->delete();
    }

    protected function validatedData(){
        return request()->validate([
            'data.name_en' => 'required',
            'data.name_nl' => 'nullable',
            'data.name_fr' => 'nullable',
            'data.description_en' => 'nullable',
            'data.description_nl' => 'nullable',
            'data.description_fr' => 'nullable',
            'data.locked' => 'boolean',
            'data.instrument_type_id' => 'required|numeric|min:1',
            'data.setup_id' => 'required|numeric|min:1',

            'data.parameters.*.id' => 'numeric|min:1',
            'data.parameters.*.value' => 'numeric|nullable',
        ]);
    }













}
