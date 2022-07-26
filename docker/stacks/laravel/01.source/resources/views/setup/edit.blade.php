@extends('setup.layout')

@section('form-title','Edit setup')
@section('form-name','Setup name')
@section('form-description',' Setup description')
@section('form-action','/setups/'.$setup->id)
@section('form-button','edit instrument type')

@section('content')

    <form action=@yield('form-action') method="post">
        @method('PATCH')
        @include('setup.form')
        <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
        @csrf
    </form>


@endsection