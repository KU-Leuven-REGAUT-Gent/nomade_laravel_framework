@extends('company.layout')

@section('form-title','Edit company')
@section('form-name','Comany name')
@section('form-description',' Comany description')
@section('form-action','/companies/'.$company->id)
@section('form-button','edit company')

@section('content')
    <form action=@yield('form-action') method="post">
        @method('PATCH')
        @include('company.form')
        <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
        @csrf
    </form>
@endsection