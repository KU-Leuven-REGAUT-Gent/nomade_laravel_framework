<?php

namespace App\Http\Controllers;

//use App\Repositories\UserRepository;
use App\Measurement;
use App\User;
use App\Setup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MeasurementController extends Controller
{
    //private $userRepository;

    /*public function __construct(userRepository $userRepository){
        $this->userRepository = $userRepository;
    }*/

    public function index(){
        $this->authorize('index', Measurement::class);
        // with('category')->get()->sortBy('category.order')->groupBy('instrument_type_category_id')->map(function($groupItems){
        //     return $groupItems->sortBy('name_en');});
        $measurementsCategorized = Measurement::with('category')->get()->sortBy('name')->groupBy('measurement_category_id');
        // dd($measurementsCategorized[1][0] );
        return view('measurement.index', compact('measurementsCategorized'));
    }

    public function create(){
        $this->authorize('create', Measurement::class);
        $measurement = new Measurement();
        $users = User::all();
        $setups = Setup::all();
        return view('measurement.create', compact('measurement','users','setups'));
    }

    // public function store(){
    //     // validate and process data
    //     $data = $this->validatedData()

    //     // split data

    //     // Creating Service via mass assignment
    //     $measurement = Measurement::create($data);
    //     return redirect('/measurements/'.$measurement->id);
    // }

    public function show(Measurement $measurement){
        // Method 1 is using $user_id as input variable
        $this->authorize('show', Measurement::class);
        $user = User::where('id',$measurement->user_id)->first();
        $setup = Setup::where('id',$measurement->setup_id)->first();
        return view('measurement.show', compact('measurement','user','setup'));
    }

    public function edit(Measurement $measurement){
        $this->authorize('edit', Measurement::class);
        $users = User::all();
        $setups = Setup::all();
        return view('measurement.edit', compact('measurement','users','setups'));
    }

    public function update(Measurement $measurement){
        $this->authorize('edit', Measurement::class);
        $data = $this->validatedData();

        $measurement->update($data);

        return redirect('/measurements/'.$measurement->id);
    }
    public function destroy(Measurement $measurement){
        $this->authorize('delete', Measurement::class);
        // First set delete_by field (and save without updating timestamps)
        $measurement->deleted_by = Auth::user()->id;
        $measurement->timestamps = false;
        $measurement->save();
        // Delete all datasets/datablobs (HARD DELETE)
        $measurement->datasets()->delete();
        // Delete measurement itself (SOFT DELETE)
        $measurement->delete();
        return redirect('/measurements');
    }

    protected function validatedData($pass_req=true){

        return request()->validate([
            'name_en' => 'required|min:5',
            'name_nl' => '',
            'name_fr' => '',
            'description_en' => '',
            'description_nl' => '',
            'description_fr' => '',
        ]);
    }
}
