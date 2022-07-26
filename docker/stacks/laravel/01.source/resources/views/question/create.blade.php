@extends('question.layout')

@section('form-title','Add New Question')
@section('form-name','Question name')
@section('form-description','Tooltip')
@section('form-action','/questions')
@section('form-button','Add Question')



@section('content')
@if(isset($questionnaire->id))
    <form action="/questionnaires/{{$questionnaire->id}}@yield('form-action')" method="post">
@else
    <form action="@yield('form-action')" method="post">
@endif
         @include('question.form')

        @csrf
</form>

@endsection