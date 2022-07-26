@extends('user.layout')
@section('show-title','User ' . $user->id )
@section('content')
    <a href="/users">< back</a>

    @include('template.show',
            ['model' => $user,
            'editUrl'=>"/users/".$user->id."/edit",
             'deleteUrl'=>"/users/".$user->id])

    <div class="card mt-3">
        <h3 class="card-header">
            Added roles
        </h3>
        <div class="card-body">
            @forelse($user->roles as $role)
            <p class="card-text">
                    <strong>
                <a href="/roles/{{$role->id}}">{{$role->name}}</a>
                </strong>
            </p>
            @empty
            <p class="card-text">
                No roles assigned</p>
            @endforelse
        </div>
    </div>

    <div class="card mt-3">
        <h3 class="card-header">
            Permissions
        </h3>

        <div class="card-body">
            @forelse($user->allPermissions()->sortBy('name') as $permission)
                <p><strong>
                <a href="/permissions/{{$permission->id}}">{{$permission->name}}</a>
                </strong> {{$permission->description}}</p>
            @empty
                <p>No permissions granted or revoked</p>
            @endforelse
        </div>
    </div>
@endsection