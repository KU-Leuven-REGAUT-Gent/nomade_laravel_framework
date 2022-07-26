@extends('user.layout')

@section('content')
    <h1>Users</h1>
    <a href="/users/create">Create new user</a>
    {{-- @forelse($users as $user)
        <p><strong>
            <a href="/users/{{$user->id}}">{{$user->name}}</a>
        </strong> {{$user->notes}}</p>
    @empty
        <p>No users available</p>
    @endforelse --}}


    @forelse($usersGrouped as $usersGroup)
    <div class="card mt-3">
        <h3 class="card-header">{{$usersGroup[0]->company->name}}</h3>
        <div class="card-body">
            @forelse($usersGroup as $user)
                <p class="card-text mb-n1">
                <strong>
                    <a href="/users/{{$user->id}}">{{$user->name}}</a>
                </strong>
                </p>
            @empty
                <p>No users available</p>
            @endforelse
        </div>
    </div>
@empty
    <p>No company available</p>
@endforelse



@endsection