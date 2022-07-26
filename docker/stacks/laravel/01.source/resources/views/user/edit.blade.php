@extends('user.layout')

@section('content')
    <h1>Edit User Details</h1>

    <form action="/users/{{$user->id}}" method="post">
        @method('PATCH')
        @include('user.form')
        <button type="submit" class="btn btn-primary">Save User</button>
    </form>


@endsection