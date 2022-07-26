@extends('questionnaireGroup.layout')

@section('form-title','Create new questionnaire group')
@section('form-name','Questionnaire group name')
@section('form-description','Questionnaire group description')
@section('form-action','/questionnaireGroups')
@section('form-button','Create questionnaire group')

@section('content')



        <form action="@yield('form-action')" method="post">
                @include('questionnaireGroup.form')
                <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
                @csrf
            </form>

@endsection