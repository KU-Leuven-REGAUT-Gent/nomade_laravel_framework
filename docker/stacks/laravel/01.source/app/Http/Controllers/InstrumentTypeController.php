<?php

namespace App\Http\Controllers;

//use App\Repositories\UserRepository;
use App\InstrumentType;
use App\InstrumentTypeCategory;
use App\Parameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InstrumentTypeController extends Controller
{
    //private $userRepository;

    /*public function __construct(userRepository $userRepository){
        $this->userRepository = $userRepository;
    }*/

    public function index(){
        $this->authorize('index', InstrumentType::class);
        $instrumentTypeCategories = InstrumentType::with('category')->get()->sortBy('category.order')->groupBy('instrument_type_category_id')->map(function($groupItems){
            return $groupItems->sortBy('name_en');});
        return view('instrumentType.index', compact('instrumentTypeCategories'));
    }

    public function create(){
        $this->authorize('create', InstrumentType::class);
        $instrumentType = new InstrumentType();
        $parameters = Parameter::all();
        $categories = InstrumentTypeCategory::all();
        $instrumentType->category= new InstrumentTypeCategory();
        $instrumentType->category->id=1;
        return view('instrumentType.create', compact('instrumentType','parameters','categories'));
    }

    public function store(){
        $this->authorize('create', InstrumentType::class);
        // validate and process data
        $data = $this->validatedData();

        // split data
        $parameters = $data['parameters'];
        unset($data['parameters']);

        // Creating Service via mass assignment
        $instrumentType = InstrumentType::create($data);
        foreach($parameters as $parameter){
            if ($parameter['checked']){

             $instrumentType->parameters()->attach($parameter['id'], ['value' => $parameter['value']]);
            }
        }
        return redirect('/instrumentTypes/'.$instrumentType->id);
    }

    public function show(InstrumentType $instrumentType){
        // Method 1 is using $user_id as input variable
        $this->authorize('show', InstrumentType::class);
        $instrumentType->load('parameters','category');

        return view('instrumentType.show', compact('instrumentType'));
    }

    public function edit(InstrumentType $instrumentType){
        $this->authorize('edit', InstrumentType::class);
        $parameters = Parameter::all();
        $categories = InstrumentTypeCategory::all();
        $instrumentType->load('parameters');
        return view('instrumentType.edit', compact('instrumentType','parameters','categories'));
    }

    public function update(InstrumentType $instrumentType){
        $this->authorize('edit', InstrumentType::class);
        $data = $this->validatedData();
        $parameters = $data['parameters'];
        unset($data['parameters']);

        $instrumentType->update($data);
        foreach($parameters as $parameter){
            $instrumentType->parameters()->detach($parameter['id']);
            if ($parameter['checked']){
             $instrumentType->parameters()->attach($parameter['id'], ['value' => $parameter['value']]);
            }
        }

        return redirect('/instrumentTypes/'.$instrumentType->id);
    }
    public function destroy(InstrumentType $instrumentType){
        $instrumentType->delete();
        return redirect('/instrumentType');
    }

    protected function validatedData($pass_req=true){

        return request()->validate([
            'name_en' => 'required|min:5',
            'name_nl' => '',
            'name_fr' => '',
            'description_en' => '',
            'description_nl' => '',
            'description_fr' => '',
            'instrument_type_category_id' => '',
            // 'parameters' => '',
            'parameters.*' => '',
            'parameters.*.id' => '',
            'parameters.*.value' => '',
            'parameters.*.checked' => 'boolean',
        ]);
    }

}
