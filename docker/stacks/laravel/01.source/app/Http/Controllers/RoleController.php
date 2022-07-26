<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{

    public function index(){
        $this->authorize('index', Role::class);
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    public function show(Role $role){
        $this->authorize('show', Role::class, $role);
        return view('role.show', compact('role'));
    }

}
