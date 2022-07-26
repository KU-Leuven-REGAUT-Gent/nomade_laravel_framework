<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Setup;
use App\SetupCategory;
use App\Repositories\SetupRepository;

class SetupController extends Controller
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
        $this->authorize('index', Setup::class);
        $setupGroupedCategories = Setup::allSetups()->sortBy('name_en')->groupBy('setup_category_id');
        $setupCategories = SetupCategory::all();
        //dd($setupCategories);
        return view('setup.index', compact('setupGroupedCategories','setupCategories'));
    }

    public function create(){
        $this->authorize('create', Setup::class);
        $setup = new Setup();
        return view('setup.create', compact('setup'));
    }

    public function store(){
        $this->authorize('create', Setup::class);
        $data = $this->validatedData();
        $data['setup_group_id'] = 1;
        $this->authorize('create', Setup::class);
        // Creating Service via mass assignment
        $setup = Setup::create($data);
        return redirect('/setups/'.$setup->id);
    }

    public function show(Setup $setup){
        $this->authorize('show', Setup::class);
        $setup->load('measurements');
        // Method 1 is using $setup_id as input variable
        //$setup = Setup::findOrFail($setup_id);
        return view('setup.show', compact('setup'));
    }

    public function edit(Setup $setup){
        $this->authorize('update', Setup::class);
        return view('setup.edit', compact('setup'));
    }

    public function update(Setup $setup){
        $this->authorize('update', Setup::class);
        $setup->update($this->validatedData());
        return redirect('/setups/'.$setup->id);
    }

    public function destroy(Setup $setup){
        $this->authorize('delete', Setup::class);
        $setup->delete();
        return redirect('/setups');
    }

    protected function validatedData(){
        return request()->validate([
            'name_en' => 'required',
            'description_en' => '',
        ]);
    }

}
