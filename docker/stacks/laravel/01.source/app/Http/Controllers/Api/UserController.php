<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //private $userRepository;

    /*public function __construct(userRepository $userRepository){
        $this->userRepository = $userRepository;
    }*/

    public function login(Request $request){
        $user = Auth::user();
        $user['permissions'] = $user->allPermissions();
        $user->unsetRelation('roles');
        return ['data' => $user];
    }

    public function index(Request $request){
        $this->authorize('index', User::class);
        $users = User::all();
        return UserResource::collection($users);
    }

    public function show(User $user){
        $this->authorize('show', $user);
        //$user-load('...');
        return new UserResource($user);
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
    /*public function create(){
        $this->authorize('create', User::class);
        $user = new User();
        return view('user.create', compact('user'));
    }*/

    /*public function store(){
        // Creating Service via mass assignment
        $user = User::create($this->validatedData());
        return redirect('/users/'.$user->id);
    }*/



    /*public function edit(User $user){
        return view('user.edit', compact('user'));
    }*/

    /*public function update(User $user){
        $user->update($this->validatedData());
        return redirect('/users/'.$user->id);
    }*/

    /*public function destroy(User $user){
        $user->delete();
        return redirect('/users');
    }*/

    /*protected function validatedData(){
        return request()->validate([
            'name' => 'required|min:5',
            'notes' => '',
        ]);
    }*/
}
