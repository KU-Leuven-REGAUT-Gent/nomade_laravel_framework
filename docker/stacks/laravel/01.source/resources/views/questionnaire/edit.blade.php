@extends('questionnaire.layout')

@section('form-title','Edit Questionnaire')
@section('form-name','Questionnaire name')
@section('form-description','Questionnaire description')
@section('form-action','/questionnaires/'.$questionnaire->id)
@section('form-button','Edit Questionnaire')

@section('content')
    <form action=@yield('form-action') method="post">
        @method('PATCH')
        @include('questionnaire.form')
        <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
        @csrf
    </form>
@endsection

