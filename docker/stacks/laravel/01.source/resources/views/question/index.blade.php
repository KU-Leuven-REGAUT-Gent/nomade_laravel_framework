@extends('question.layout')

@section('content')
    <h1>Questions</h1>
    <a href="/questions/create">Create new question</a>
    @forelse($questions as $question)
        <p><strong>
            <a href="/questions/{{$question->id}}">{{$question->name}}</a>
        </strong> {{$question->description_en}}</p>
    @empty
        <p>No questions available</p>
    @endforelse
@endsection