<?php

namespace App\Http\Controllers;

use App\Company;

class CompanyController extends Controller
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

    public function index(Company $company){
        $this->authorize('index', Company::class);
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }
    public function create (){
        $this->authorize('create', Company::class);
        $company = new Company();

        return view('company.create',compact('company'));
    }

    public function store(){
        // validate data
        $this->authorize('create', Company::class);
        $data = $this->validatedData();
        // create company
        $company = Company::create($data);

        return redirect('/companies/'.$company->id);
    }

    public function edit(Company $company){
        $this->authorize('edit', Company::class);
        return view('company.edit',compact('company'));
    }

    public function update(Company $company){
        $this->authorize('edit', Company::class);
        $data = $this->validatedData(false,$company);
        $company->update($data);
        return redirect('/companies/'.$company->id);
    }

    public function destroy(Company $company){
        $this->authorize('delete', Company::class);
        $company->delete();
        return redirect('/companies');
    }

    public function show(Company $company){
        // Method 1 is using $user_id as input variable
        //$user = User::findOrFail($user_id);
        $this->authorize('show', Company::class);
        return view('company.show', compact('company'));
    }


    protected function validatedData($pass_req=true,$company=null){
        return request()->validate([
            'name_en' => 'required|min:3|unique:companies,'.  ($company ? 'id,'.$company->id:'name_en'),
            'name_nl' => '',
            'name_fr' => '',
            'description_en' => '',
            'description_nl' => '',
            'description_fr' => '',
        ]);
    }
}
