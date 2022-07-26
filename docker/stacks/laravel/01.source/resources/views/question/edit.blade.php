@extends('question.layout')

@section('form-title','Edit Question')
@section('form-name','Question name')
@section('form-description','Tooltip')
@section('form-action','/questions/'.$question->id)

@section('form-button','Edit Question')

@section('content')
@if(isset($questionnaire->id))
    <form action="/questionnaires/{{$questionnaire->id}}@yield('form-action')" method="post">
@else
    <form action="@yield('form-action')" method="post">
@endif
        @method('PATCH')
        @include('question.form')
        @csrf
</form>
@endsection

