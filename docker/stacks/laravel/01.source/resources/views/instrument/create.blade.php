@extends('instrument.layout')

@section('form-title','Create new instrument')
@section('form-name','Instrument name')
@section('form-description','Instrument description')
@section('form-action','/instrument')
@section('form-button','create instrument ')

@section('content')
    <form action="@yield('form-action')" method="post">
        @include('instrument.form')
        <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
        @csrf
    </form>
@endsection
