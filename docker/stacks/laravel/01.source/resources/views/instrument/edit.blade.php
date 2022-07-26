@extends('instrument.layout')
@section('form-title','Edit instrument details')
@section('form-name','Instrument name')
@section('form-description',' Instrument description')
@section('form-action','/instrument'.$instrument->id)
@section('form-button','Edit instrument ')

@section('content')
    <form action=@yield('form-action') method="post">
        @method('PATCH')
        @include('instrument.form')
        <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
        @csrf
    </form>
@endsection



