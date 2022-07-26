@extends('submission.layout')

@section('content')
    <h1>{{$submission->questionnaire->name}}</h1>
    <a href="/submissions">< back</a>
    <div>
        <p><strong>User</strong></p>
        <p>{{$submission->user->name}}</p>
    </div>
    <div>
        <p><strong>Started at</strong> {{$submission->started_at}}</p>
        <p><strong>Finished at</strong> {{$submission->finished_at}}</p>
    </div>

    <form action="/submissions/{{$submission->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-primary">Delete</button>
    </form>

    <h1>Questions</h1>
    <div>
        @forelse($submission->questionnaire->questions as $question)
            <div>
                <div><strong>{{$question->name}}</strong></div>
                @forelse($submission->answers->where('question_id',$question->id) as $submission_answer)
                    @php ($answer = $question->answers->where('id',$submission_answer->answer_id)->first())
                    <div>
                        {{$answer->name}}
                        {{$answer->description_en}}
                    </div>
                @empty
                    No answer given
                @endforelse
            </div>
        @empty
            No questions
        @endforelse
    </div>
@endsection