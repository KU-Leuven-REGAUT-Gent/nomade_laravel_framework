@extends('instrumentType.layout')
@section('form-title','Edit instrument type details')
@section('form-name','Instrument type name')
@section('form-description',' Instrument type description')
@section('form-action','/instrumentTypes/'.$instrumentType->id)
@section('form-button','Edit instrument type')

@section('content')
    <form action=@yield('form-action') method="post">
        @method('PATCH')
        @include('instrumentType.form')
        <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
        @csrf
    </form>
@endsection



