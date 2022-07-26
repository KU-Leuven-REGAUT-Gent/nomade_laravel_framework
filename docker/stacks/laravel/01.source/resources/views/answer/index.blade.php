@extends('answer.layout')

@section('content')
    <h1>Answers</h1>
    @forelse($answers as $answer)
        <p><strong>
            <a href="/answers/{{$answer->id}}">{{$answer->name}}</a>
        </strong> {{$answer->description_en}}</p>
    @empty
        <p>No answers available</p>
    @endforelse

@endsection