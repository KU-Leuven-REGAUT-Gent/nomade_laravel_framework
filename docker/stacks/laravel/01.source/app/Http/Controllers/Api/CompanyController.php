<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Company;
use App\Http\Resources\CompanyResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    //private $userRepository;

    /*public function __construct(userRepository $userRepository){
        $this->userRepository = $userRepository;
    }*/

    public function index(Request $request){
        $this->authorize('index', Company::class);
        $companies = Company::all();
        return CompanyResource::collection($companies);
    }

    public function show(Company $company){
        $this->authorize('show', $company);
        $company->load([
            'users',
        ]);
        return new CompanyResource($company);
    }

    public function store(){
        return response('Method Not Allowed', 405);
    }

    public function edit(Setup $setup){
        return response('Method Not Allowed', 405);
    }

    public function update(Setup $setup){
        return response('Method Not Allowed', 405);
    }

    public function destroy(Setup $setup){
        return response('Method Not Allowed', 405);
    }
}
