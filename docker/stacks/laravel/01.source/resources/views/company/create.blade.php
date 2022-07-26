@extends('company.layout')

@section('form-title','Create new company')
@section('form-name','Company name')
@section('form-description',' Company description')
@section('form-action','/companies')
@section('form-button','create company')

@section('content')

    <form action= @yield('form-action') method="post">
        @include('company.form')
        @csrf
        <button type="submit" class="btn btn-primary mt-3">Add Company</button>
    </form>


@endsection
