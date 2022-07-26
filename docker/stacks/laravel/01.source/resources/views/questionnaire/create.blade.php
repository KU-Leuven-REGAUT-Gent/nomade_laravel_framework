@extends('questionnaire.layout')

@section('title','Create New Questionnaire')
@section('form-name','Questionnaire name')
@section('form-description','Questionnaire description')
@section('form-action','/questionnaires')
@section('form-button','Create Questionnaire')

@section('content')



        <form action="@yield('form-action')" method="post">
                @include('questionnaire.form')
                <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
                @csrf
            </form>

@endsection


