@extends('measurement.layout')

@section('form-title','Create new measurement')
@section('form-name','Measurement name')
@section('form-description','Measurement  description')
@section('form-action','/measurements')
@section('form-button','create measurement')

@section('content')
    <form action="@yield('form-action')" method="post">
        @include('measurement.form')
        <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
        @csrf
    </form>
@endsection
