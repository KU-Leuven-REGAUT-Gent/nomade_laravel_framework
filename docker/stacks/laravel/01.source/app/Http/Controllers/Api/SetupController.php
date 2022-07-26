<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Setup;
use App\Http\Resources\SetupResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SetupController extends Controller
{
    public function index(){
        $this->authorize('index', Setup::class);
        //return $this->setupRepository->all();
        //return SetupResource::collection(Setup::paginate());
        return SetupResource::collection(Setup::all());
    }

    public function show(Setup $setup){
        $this->authorize('show', $setup);
        $setup->load([
            'category',
            'group',
            'instruments',
            'instruments.type',
            'instruments.type.parameters',
            'instruments.parameters',
        ]);
        foreach($setup->instruments as $instrument){
            $parameters = array();
            foreach($instrument->type->parameters as $instrument_type_parameter){
                $parameter['id'] = $instrument_type_parameter['pivot']['parameter_id'];
                foreach($instrument->parameters as $instrument_parameter){
                    if($instrument_parameter['pivot']['parameter_id'] == $parameter['id']){
                        $parameter['value'] = $instrument_parameter['pivot']['value'];
                        /*$parameter['created_at'] = $instrument_parameter['pivot']['created_at'];
                        $parameter['updated_at'] = $instrument_parameter['pivot']['updated_at'];
                        $parameter['created_by'] = $instrument_parameter['pivot']['created_by'];
                        $parameter['updated_by'] = $instrument_parameter['pivot']['updated_by'];*/
                    }
                }
                array_push($parameters,$parameter);
            }
            unset($instrument->type);
            unset($instrument->parameters);
            $instrument->parameters = $parameters;
        }
        return new SetupResource($setup);
    }

    public function store(){
        $this->authorize('create', Setup::class);
        $data = $this->validatedData()['data'];
        $data['created_by'] = Auth::user()->id;
        $data['updated_by'] = Auth::user()->id;
        $setup = Setup::create($data);
        return new SetupResource($setup);
    }

    public function update(Setup $setup){
        $this->authorize('edit', $setup);
        $data = $this->validatedData()['data'];
        $data['updated_by'] = Auth::user()->id;
        $setup->update($data);
        return new SetupResource($setup);
    }

    public function destroy(Setup $setup){
        return response('Method Not Allowed', 405);
    }

    protected function validatedData(){
        return request()->validate([
            'data.name_en' => 'required',
            'data.name_nl' => 'nullable',
            'data.name_fr' => 'nullable',
            'data.description_en' => 'nullable',
            'data.description_nl' => 'nullable',
            'data.description_fr' => 'nullable',
            'data.hw_identifier' => 'required|numeric|min:1',
            'data.version' => 'required|numeric|min:1',
            'data.locked' => 'boolean',
            'data.setup_group_id' => 'numeric|min:1|nullable',
            'data.setup_category_id' => 'numeric|min:1|nullable',
        ]);
    }













}
