@extends('questionnaire.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card mt-8">
            <div class="card-header d-flex align-items-center">
                    <h3 class="mr-auto">Questionnaire: {{$questionnaire->name}}</h3>
                    <div class="btn-group" role="group">
                        @include('button.edit', array('class'=>$questionnaire,'url'=>"/questionnaires/".$questionnaire->id."/edit"))
                        @include('button.delete', array('class'=>$questionnaire,'url'=>"/questionnaires/".$questionnaire->id))
                    </div>
            </div>
            <div class="card-body">
                <div><b>Title:</b></div>
                <div><img class="img-lang mr-2" src="/img/lang/en.png" />{{$questionnaire->name}}</div>
                <div><img class="img-lang mr-2" src="/img/lang/nl.png" />{{$questionnaire->name_nl}}</div>
                <div><img class="img-lang mr-2" src="/img/lang/fr.png" />{{$questionnaire->name_fr}}</div>
                <div><b>Tooltip:</b></div>
                <div><img class="img-lang mr-2" src="/img/lang/en.png" />{{$questionnaire->description_en}}</div>
                <div><img class="img-lang mr-2" src="/img/lang/nl.png" />{{$questionnaire->description_nl}}</div>
                <div><img class="img-lang mr-2" src="/img/lang/fr.png" />{{$questionnaire->description_fr}}</div>
             <div class = "mt-1"><b>Category: </b>{{$questionnaire->category->name}}</div>
             <div class = "mt-1"><b>Group: </b>{{$questionnaire->group->name}}</div>
            </div>
        </div>

        <!---- Questions---->
        <div class="card mt-3">
            <div class="card-header d-flex align-items-center">
                <h3 class="mr-auto"> Questions </h3>
                <a class="btn btn-primary-outline" href="/questionnaires/{{$questionnaire->id}}/questions/create"><span class="align-middle"><i class="fa fa-plus"></i><b> Add new Question</span></b></a>
            </div>
            <div class="card-body">

            @forelse($questionnaire->questions as $question)
            <div class="accordion md-accordion mt-1" id="question_{{$question->id}}" role="tablist" aria-multiselectable="true">
                <div class="card mt-1">
                    <!---- card Header---->
                    <div class="card-header" role="tab" id="questionHeader_{{$question->id}}" >
                        <div class="d-flex align-items-center">
                            <a class="collapsed d-flex  w-100 " data-toggle="collapse" data-parent="#question_{{$question->id}}" data-target="#questionBody_{{$question->id}}"
                                aria-expanded="false" aria-controls="questionGroup_{{$question->id}}">
                                <h3 class="mb-0 black-text py-1">
                                    {{$question->name}} <i class="fas fa-angle-down rotate-icon"></i>
                                </h3>
                            </a>
                            <div class="btn-group flex-shrink-1" role="group">
                                @include('button.arrange', array('class'=>$questionnaire,'url'=>"/questionnaires/".$questionnaire->id."/questions/".$question->id))
                                @include('button.duplicate', array('class'=>$questionnaire,'url'=>"/questionnaires/".$questionnaire->id."/questions/".$question->id."/duplicate"))
                                @include('button.edit', array('class'=>$questionnaire,'url'=>"/questionnaires/".$questionnaire->id."/questions/".$question->id."/edit"))
                                @include('button.delete', array('class'=>$questionnaire,'url'=>"/questionnaires/".$questionnaire->id."/questions/".$question->id))
                            </div>
                        </div>
                    </div>

                    <!---- card body---->
                    <div id="questionBody_{{$question->id}}" class="collapse" aria-labelledby="questionHeader_{{$question->id}}"
                        data-parent="#question_{{$question->id}}">
                    <div class="card-body">
                        <div><b>Question:</b></div>
                        <div><img class="img-lang mr-2" src="/img/lang/en.png" />{{$question->name}}</div>
                        <div><img class="img-lang mr-2" src="/img/lang/nl.png" />{{$question->name_nl}}</div>
                        <div><img class="img-lang mr-2" src="/img/lang/fr.png" />{{$question->name_fr}}</div>
                        <div><b>Tooltip:</b></div>
                        <div><img class="img-lang mr-2" src="/img/lang/en.png" />{{$question->description_en}}</div>
                        <div><img class="img-lang mr-2" src="/img/lang/nl.png" />{{$question->description_nl}}</div>
                        <div><img class="img-lang mr-2" src="/img/lang/fr.png" />{{$question->description_fr}}</div>

                        @if($question->conditions->isNotEmpty())
                            <div><b>Condition:</b></div>
                            <div>Question: {{$question->conditions->first()->condition_question_id}}</div>
                            <div>Answer:  {{$question->conditions->first()->condition_answer_id}}</div>
                        @endif

                        <ul class="list-group">
                            <!---- answers---->
                            <div class="card mt-3">
                                <!---- card Header---->
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="mr-auto"> Answers </h3>
                                    <a  class="btn btn-primary-outline"
                                        href="/questionnaires/{{$questionnaire->id}}/questions/{{$question->id}}/answers/create">
                                        <span
                                            class="align-middle"><i class="fa fa-plus"></i><b> Add new Answer</b>
                                        </span>
                                    </a>

                                </div>
                                @forelse($question->answers as $answer)                                
                                    <li class="list-group-item d-flex justify-content-between align-items-center">                                    
                                        <span>
                                            <a id="answer_{{$answer->id}}"></a>                                       
                                            @switch($question->type->id)
                                                @case(1)
                                                    <span>- </span>
                                                    @break
                                                @case(2)
                                                    <span><input type="radio" name="question_{{$question->id}}" />&nbsp;</span>
                                                    @break
                                                @case(3)
                                                    <span><input type="checkbox" name="question_{{$question->id}}" />&nbsp;</span>
                                                    @break
                                            @endswitch
                                            {{$answer->name}}
                                            <span style="color:#999999;">({{$answer->type->name}})</span>
                                        </span>
                                        <span class="pull-right">
                                            <div class="btn-group" role="group">
                                                @include('button.arrange', array('class'=>$questionnaire,'url'=>"/questionnaires/".$questionnaire->id."/questions/".$question->id."/answers/".$answer->id))
                                                @include('button.edit', array('class'=>$questionnaire,'url'=>"/questionnaires/".$questionnaire->id."/questions/".$question->id."/answers/".$answer->id."/edit"))
                                                @include('button.delete', array('class'=>$questionnaire,'url'=>"/questionnaires/".$questionnaire->id."/questions/".$question->id."/answers/".$answer->id))
                                            </div>
                                        </span>
                                    </li>
                                @empty
                                    <li class="list-group-item">No answers available</li>
                                @endforelse
                                </div>
                            </div>
                    </div>
                </div>
                </div>
            @empty
                <div class="card mt-4">
                    <div class="card-header">No questions available</div>
                </div>
            @endforelse
        </div>
    </div>
        {{-- COMMENTED OUT
            @forelse($questionnaire->submissions as $submission)
                <div class="card mt-4">
                    <div class="card-header">Submission: {{$submission->finished_at}}</div>
                    <div class="card-body">
                        @if(isset($submission->user))
                            by {{$submission->user->name}}
                        @else
                            No user
                        @endif
                    </div>
                </div>
            @empty
                <div class="card mt-4">
                    <div class="card-header">No submissions available</div>
                </div>
            @endforelse
        --}}
    </div>
</div>
@endsection