@extends('submission.layout')

@section('content')
    <h1>Submissions</h1>
    <a href="/submissions/create">Create new submission</a>
    @forelse($submissions as $submission)
        <p>
            <strong><a href="/submissions/{{$submission->id}}">{{$submission->finished_at}}</a></strong>
        </p>
    @empty
        <p>No submissions available</p>
    @endforelse

@endsection