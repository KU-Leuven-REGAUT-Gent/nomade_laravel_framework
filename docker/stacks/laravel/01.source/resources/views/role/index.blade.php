@extends('role.layout')

@section('content')
    <h1>Roles</h1>

    <div class="card mt-3">
        <h3 class="card-header">List</h3>
        <div class="card-body">
                @forelse($roles as $role)
                <p class="card-text mb-n1">
                <strong>
                <a href="/roles/{{$role->id}}">{{$role->name}}</a>
                </strong>
                </p>
            @empty
                <p>No roles available</p>
            @endforelse
        </div>
    </div>
@endsection