@extends('permission.layout')

@section('content')
    <h1>Permissions</h1>

    <div class="card mt-3">
        <h3 class="card-header">List</h3>
        <div class="card-body">
                @forelse($permissions as $permission)
                <p class="card-text mb-n1">
                <strong>
                <a href="/permissions/{{$permission->id}}">{{$permission->name}}</a>
                </strong>
                </p>
            @empty
                <p>No permissions available</p>
            @endforelse
        </div>
    </div>
@endsection