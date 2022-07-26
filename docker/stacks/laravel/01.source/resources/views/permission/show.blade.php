@extends('role.layout')

@section('content')
    <h1>Role: {{$role->name}}</h1>
    <a href="/roles">< back</a>
    
 
        
    <div class="card mt-3">
        <h3 class="card-header">Users</h3>
        <div class="card-body">
        <a href="/users/create">Create new user</a>
                @forelse($role->users as $user)
                <p class="card-text mb-n1">
                <strong>
                    <a href="/users/{{$user->id}}">{{$user->name}}</a>
                </strong>
                </p>
            @empty
                <p>No users assigned</p>
            @endforelse
        </div>
    </div>
   
        
    <div class="card mt-3">
        <h3 class="card-header">Users</h3>
        <div class="card-body">
        <a href="/permissions/create">Create new permission</a>
            @forelse($role->permissions as $permission)
                <p class="card-text mb-n1">
                <strong>
                <a href="/permissions/{{$permission->id}}">{{$permission->name}}</a>
                </strong> {{$permission->description}}</p>
                </p>
            @empty
                <p>No permissions granted</p>
            @endforelse
        </div>
    </div>
    <form action="/roles/{{$role->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-primary mt-3 mb-3">Delete</button>
    </form>
@endsection