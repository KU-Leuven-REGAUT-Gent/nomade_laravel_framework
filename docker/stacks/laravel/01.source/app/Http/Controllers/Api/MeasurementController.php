<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Measurement;
use App\Http\Resources\MeasurementResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MeasurementController extends Controller
{
    public function index(){
        $this->authorize('index', Measurement::class);
        //return $this->measurementRepository->all();
        //return MeasurementResource::collection(Measurement::paginate());
        return MeasurementResource::collection(Measurement::all());
    }

    public function show(Measurement $measurement){
        $this->authorize('show', $measurement);
        $measurement->load([
            'category',
        ]);
        return new MeasurementResource($measurement);
    }

    public function store(){
        $this->authorize('create', Measurement::class);
        $data = $this->validatedData()['data'];
        $data['created_by'] = Auth::user()->id;
        $data['updated_by'] = Auth::user()->id;
        $measurement = Measurement::create($data);
        return new MeasurementResource($measurement);
    }

    public function update(Measurement $measurement){
        $this->authorize('edit', $measurement);
        $data = $this->validatedData()['data'];
        $data['updated_by'] = Auth::user()->id;
        $measurement->update($data);
        return new MeasurementResource($measurement);
    }

    public function destroy(Measurement $measurement){
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
            'data.measurement_category_id' => 'required|numeric|min:1',
            'data.setup_id' =>  'required|numeric|min:1',
            'data.user_id' =>  'required|numeric|min:1',
            'data.started_at' => 'nullable|date_format:Y-m-d H:i:s.v', // VALIDATION FAILS ON TIMESTAMP -> RETURNS 302 ???
            'data.stopped_at' => 'nullable|date_format:Y-m-d H:i:s.v', // VALIDATION FAILS ON TIMESTAMP -> RETURNS 302 ???
        ]);
    }
}
