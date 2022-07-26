@extends('instrumentType.layout')

@section('form-title','Create new instrument type')
@section('form-name','Instrument type name')
@section('form-description','Instrument type description')
@section('form-action','/instrumentTypes')
@section('form-button','create instrument type')

@section('content')
    <form action="@yield('form-action')" method="post">
        @include('instrumentType.form')
        <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
        @csrf
    </form>
@endsection
