@extends('questionnaireGroup.layout')
@section('show-title','Questionnaire category ' . $questionnaireGroup->id )

@section('content')
@include('template.show',['model'=>$questionnaireGroup])
@endsection