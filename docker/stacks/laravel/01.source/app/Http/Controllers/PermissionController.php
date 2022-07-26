<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller
{

    public function index(){
        $this->authorize('index', Permission::class);
        $permissions = Permission::all()->sortBy('name_en');
        return view('permission.index', compact('permissions'));
    }

    public function show(Permission $permission){
        $this->authorize('view', Permission::class, $permission);
        return view('permission.show', compact('permission'));
    }

}
