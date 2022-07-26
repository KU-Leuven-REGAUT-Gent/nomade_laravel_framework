@extends('measurement.layout')
@section('form-title','Edit measurement details')
@section('form-name','Measurement name')
@section('form-description','Measurement description')
@section('form-action','/measurements/'.$measurement->id)
@section('form-button','Edit measurement')

@section('content')
    <form action=@yield('form-action') method="post">
        @method('PATCH')
        @include('measurement.form')
        <button type="submit" class="btn btn-primary mt-3 mb-3">@yield('form-button')</button>
        @csrf
    </form>
@endsection



