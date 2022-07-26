<?php

namespace App\Http\Controllers;

//use App\Repositories\UserRepository;
use App\Instrument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InstrumentController extends Controller
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

    // public function index(){
    //     $this->authorize('index', Instrument::class);
    //     $instrumentCategories = Instrument::with('type')->get()->map(function($groupItems){
    //         return $groupItems->sortBy('name_en');});
    //     return view('instrument.index', compact('instrumentCategories'));
    // }

    // public function create(){
    //     $this->authorize('create', Instrument::class);
    //     $instrument = new Instrument();
    //     $parameters = Parameter::all();
    //     $categories = InstrumentCategory::all();
    //     $instrument->category= new InstrumentCategory();
    //     $instrument->category->id=1;
    //     return view('instrument.create', compact('instrument','parameters','categories'));
    // }

    // public function store(){
    //     $this->authorize('create', Instrument::class);
    //     // validate and process data
    //     $data = $this->validatedData();

    //     // split data
    //     $parameters = $data['parameters'];
    //     unset($data['parameters']);

    //     // Creating Service via mass assignment
    //     $instrument = Instrument::create($data);
    //     foreach($parameters as $parameter){
    //         if ($parameter['checked']){

    //          $instrument->parameters()->attach($parameter['id'], ['value' => $parameter['value']]);
    //         }
    //     }
    //     return redirect('/instruments/'.$instrument->id);
    // }

    public function show(Instrument $instrument){
        // Method 1 is using $user_id as input variable
        $this->authorize('show', $instrument);
        $instrument->load('parameters','type');

        return view('instrument.show', compact('instrument'));
    }

    public function edit(Instrument $instrument){
        $this->authorize('edit', Instrument::class);
        $parameters = Parameter::all();
        $categories = InstrumentCategory::all();
        $instrument->load('parameters');
        return view('instrument.edit', compact('instrument','parameters','categories'));
    }

    public function update(Instrument $instrument){
        $this->authorize('edit', Instrument::class);
        $data = $this->validatedData();
        $parameters = $data['parameters'];
        unset($data['parameters']);

        $instrument->update($data);
        foreach($parameters as $parameter){
            $instrument->parameters()->detach($parameter['id']);
            if ($parameter['checked']){
             $instrument->parameters()->attach($parameter['id'], ['value' => $parameter['value']]);
            }
        }

        return redirect('/instruments/'.$instrument->id);
    }
    public function destroy(Instrument $instrument){
        $instrument->delete();
        return redirect('/instrument');
    }

    protected function validatedData($pass_req=true){

        return request()->validate([
            'name_en' => 'required|min:5',
            'name_nl' => '',
            'name_fr' => '',
            'description_en' => '',
            'description_nl' => '',
            'description_fr' => '',
            'instrument__category_id' => '',
            // 'parameters' => '',
            'parameters.*' => '',
            'parameters.*.id' => '',
            'parameters.*.value' => '',
            'parameters.*.checked' => 'boolean',
        ]);
    }

}
