@extends('questionnaireCategory.layout')

@section('form-title','Create new questionnaire category')
@section('form-name','Questionnaire category name')
@section('form-description','Questionnaire category description')
@section('form-action','/questionnaireCategories')
@section('form-button','Create questionnaire category')

@section('content')



        <form action="@yield('form-action')" method="post">
                @include('questionnaireCategory.form')
                <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
                @csrf
            </form>

@endsection