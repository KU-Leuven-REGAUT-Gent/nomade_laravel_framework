@extends('answer.layout')

@section('form-title','Create New Answer')
@section('form-action','/answers')
@section('form-button','Create Answer')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        @include('answer.form')
    </div>
</div>
@endsection


