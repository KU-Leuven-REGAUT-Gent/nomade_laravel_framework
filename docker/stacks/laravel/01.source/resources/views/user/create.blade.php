@extends('user.layout')

@section('content')
    <h1>Create new user</h1>

    <form action="/users" method="post">

        @include('user.form')
        <button type="submit" class="btn btn-primary mt-3">Add User</button>
    </form>


@endsection