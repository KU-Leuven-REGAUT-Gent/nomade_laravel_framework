@extends('question.layout')

@section('content')
    <h1>Question</h1>
    <a href="/questions">< back</a>
    <div>
        <p><strong>Name</strong></p>
        <p>{{$question->name}}</p>
    </div>
    <div>
        <p><strong>Notes</strong></p>
        <p>{{$question->description_en}}</p>
    </div>
    <div>
        <p><strong>Belongs to questionnaire:</strong></p>
        <p>{{$question->questionnaire->name}}</p>

    <a href="/questions/{{$question->id}}/edit">Edit</a>

    <!-- <form action="/questions/{{$question->id}}" method="post">
        @method('DELETE')
        @csrf
        <button>Delete</button>
    </form> -->
    <div class="btn-group" role="group">
                        @include('button.edit', array('class'=>$question,'url'=>"/questions/".$question->id."/edit"))
                        @include('button.delete', array('class'=>$question,'url'=>"/questions/".$question->id))
    </div>
    

    <h1>Answers</h1>
    <a href="/answers/create">Create new answer</a>
    @forelse($question->answers as $answer)
        <p><strong>
            <a href="/answers/{{$answer->id}}">{{$answer->name}}</a>
        </strong> {{$answer->description_en}}</p>
    @empty
        <p>No answers available</p>
    @endforelse

@endsection