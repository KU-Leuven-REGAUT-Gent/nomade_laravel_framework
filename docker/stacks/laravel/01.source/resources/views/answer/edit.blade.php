@extends('answer.layout')

@section('form-title','Edit Answer')
@section('form-action')/answers/{{$answer->id}}@endsection
@section('form-method')@method('PATCH')@endsection
@section('form-button','Edit Answer')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        @include('answer.form')
    </div>
</div>
@endsection

