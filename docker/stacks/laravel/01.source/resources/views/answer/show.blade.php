@extends('answer.layout')

@section('content')
    <h1>Answer</h1>
    <a href="/answers">< back</a>
    <div>
        <p><strong>Name</strong></p>
        <p>{{$answer->name}}</p>
    </div>
    <div>
        <p><strong>Notes</strong></p>
        <p>{{$answer->description_en}}</p>
    </div>

    <a href="/answers/{{$answer->id}}/edit">Edit</a>

    <form action="/answers/{{$answer->id}}" method="post">
        @method('DELETE')
        @csrf
        <button>Delete</button>
    </form>

    <h1>Questions</h1>
    @forelse($answer->questions as $question)
        <p><strong>
            <a href="/questions/{{$question->id}}">{{$question->name}}</a>
        </strong> {{$question->description_en}}</p>
    @empty
        <p>No answers available</p>
    @endforelse

@endsection