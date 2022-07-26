@extends('setup.layout')

@section('form-title','Create new setup')
@section('form-name','Setup name')
@section('form-description','Setup description')
@section('form-action','/setups')
@section('form-button','create instrument type')

@section('content')


    <form action="@yield('form-action')" method="post">
        @include('setup.form')
        <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
        @csrf
    </form>
@endsection