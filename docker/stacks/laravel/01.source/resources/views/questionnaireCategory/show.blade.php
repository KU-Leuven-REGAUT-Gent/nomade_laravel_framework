@extends('questionnaireCategory.layout')
@section('show-title','Questionnaire category ' . $questionnaireCategory->id )

@section('content')
@include('template.show',['model'=>$questionnaireCategory])
@endsection