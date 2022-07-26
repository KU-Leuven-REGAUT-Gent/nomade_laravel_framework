<?php

namespace App\Http\Controllers;

//use App\Repositories\UserRepository;
use App\User;
use App\Role;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //private $userRepository;

    /*public function __construct(userRepository $userRepository){
        $this->userRepository = $userRepository;
    }*/

    public function index(){
        $this->authorize('index', User::class);
        $usersGrouped = User::all()->sortBy('username')->groupBy('company_id');
       // dd($usersGrouped[1]);
        return view('user.index', compact('usersGrouped'));
    }

    public function create(){
        $this->authorize('create', User::class);
        $user = new User();
        $roles = Role::all();
        $companies = Company::all();
        $user->company= new Company();
        $user->company->id=1;
        return view('user.create', compact('user','roles','companies'));
    }

    public function store(){
        // validate and process data
        $this->authorize('create', User::class);
        $data = $this->validatedData();
        $data = $this->processing($data);

        // extract roles
        $roles = $data['roles'];
        unset($data['roles']);
        // Creating Service via mass assignment
        $user = User::create($data);

        // add roles
        $user->roles()->sync($roles);

        return redirect('/users/'.$user->id);
    }

    public function show(User $user){
        $this->authorize('show', User::class);
        // Method 1 is using $user_id as input variable
        //$user = User::findOrFail($user_id);
        $user->load('company');
        return view('user.show', compact('user'));
    }

    public function edit(User $user){
        $this->authorize('edit', User::class);
        $user->load('company');
        $companies = Company::all();
        $roles = Role::all();
            return view('user.edit', compact('user','roles','companies'));
    }

    public function update(User $user){
        $this->authorize('edit', User::class);
        // Creating Service via mass assignment
        $data = $this->validatedData(false, $user);
        $data = $this->processing($data);
        $roles = $data['roles'];
        unset($data['roles']);

        $user->update($data);

        // add roles
        $user->roles()->sync($roles);
        return redirect('/users/'.$user->id);
    }
    public function destroy(User $user){
        $this->authorize('delete', User::class);
        $user->delete();
        return redirect('/users');
    }

    protected function validatedData($pass_req=true, $user=null){
        return request()->validate([
            'username' => 'required|min:5|unique:users,'.  ($user ? 'id,'.$user->id:'username'),
            'company_id' => 'required',
            'password' => ($pass_req?'required':''),
            'roles' => 'required|min:1',
        ]);
    }
    
    protected function processing($data){
        if ($data['password'] != ''){
            $password_raw = $data['password'];
            $data['password'] = Hash::make($password_raw);
            $data['HA1'] = md5($data['username'].':'.config('app.realm')."_api".':'.$password_raw);
        }else{
            unset($data['password']);
        }

        return $data;


    }

}
