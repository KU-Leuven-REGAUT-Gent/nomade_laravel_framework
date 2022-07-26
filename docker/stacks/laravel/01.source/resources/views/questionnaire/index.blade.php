@extends('questionnaire.layout')

@section('Header')

<h1 align="center">Questionnaires</h1>
<div class="card mt-3  ">
    <div class="card-header">
        <h3 class="mr-auto"> Create </h3>
    </div>
    <div class="card-body  d-flex justify-content-around">
        <!-- questionnaire -->
        <a class="btn btn-primary-outline" href="/questionnaires/create">
            <span class="align-middle">
                <i class="fa fa-plus"></i>
                <b> new questionnaire</b>
            </span>
        </a>
        <!-- group -->
        <a class="btn btn-primary-outline" href="/questionnaireGroups/create">
            <span class="align-middle">
                <i class="fa fa-plus"></i>
                <b> new group</b>
            </span>
        </a>
        <!-- categorie -->
        <a class="btn btn-primary-outline" href="/questionnaireCategories/create">
            <span class="align-middle">
                <i class="fa fa-plus"></i>
                <b> new category</b>
            </span>
        </a>
    </div>
</div>
@endsection

{{-- sidebar --}}
@section('sideContent')

    <div class="card bg-faded text-center text-md-left" id="questionnaireGroupList">
        <div class="card-header d-flex justify-content-between">
                
                    <h4> {{$groupByPar}}</h4>

                    <button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        sort
                    </button>
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/questionnaires?sort=category">category</a>
                        <a class="dropdown-item" href="/questionnaires?sort=group">group</a>
                    </div>       
        </div>

        <ul class="list-group list-group-flush">
            @forelse($questionnairesGroup as $questionnaires)
            <a href="#{{$questionnaires[0]-> $groupByPar->id }}"
                onclick="fillQuestionnareList({{$questionnaires}})"
                id="questionnaireGroup_{{$questionnaires[0]-> $groupByPar->id }}"
                class="list-group-item d-inline-block" data-parent="#sidebar"><i class="fa fa-book"></i>
                <span>{{$questionnaires[0]-> $groupByPar->id }} -
                    {{$questionnaires[0]-> $groupByPar->name}}</span></a>
            @empty
            <p>No questionnaire {{$groupByPar}} available</p>
            @endforelse
        </ul>
    </div>
@endsection

@section('content')
    
            <!-- <div class="col" id="questionnaires_col"> -->
                <div class="accordion md-accordion" id="questionnaires_id" role="tablist" aria-multiselectable="true">
                    <div class="card bg-faded text-center text-md-left" id="questionnaireList">
                        <div class="card-header d-flex align-items-center">
                            <h4> Questionnaire list </h4>
                        </div>
                        <div class="card-body" id="questionnaireListBody_id">
                            @forelse($questionnairesGroup->first() as $questionnaire)
                            <div class="card">
                                <div class="card-header" role="tab" id="questionnaireHeader_{{$questionnaire->id}}">
                                    <div class="d-flex  align-items-center my-n2">
                                        <a class="collapsed d-flex  w-100" data-toggle="collapse"
                                            data-parent="#questionnaires_id"
                                            data-target="#questionnaire_{{$questionnaire->id}}" aria-expanded="false"
                                            aria-controls="questionnairesGroup_{{$questionnaire->id}}">
                                            <h3 class="mb-0 black-text py-1">
                                                {{$questionnaire->name}}
                                                @if (!empty($questionnaire->description))
                                                <i class="fa fa-angle-down rotate-icon"></i>
                                                @endif
                                            </h3>
                                        </a>
                                        @include('button.show', array('class'=>$questionnaire,'url'=>"/questionnaires/".
                                        $questionnaire->id))
                                        <!-- @include('button.export', array('class'=>$questionnaire,'url'=>"/questionnaires/".$questionnaire->id."/export")) -->
                                        <!-- <form action="/questionnaires/export"  method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-primary mt-3">export</button>                                  
                                        </form> -->
                                    </div>
                                </div>

                                <!-- Card body -->
                                @if (!empty($questionnaire->description))
                                <div id="questionnaire_{{$questionnaire->id}}" class="collapse"
                                    aria-labelledby="questionnaireHeader_{{$questionnaire->id}}"
                                    data-parent="#questionnaires">
                                    <div class="card-body">
                                        <p class="card-text mr-auto">{{$questionnaire->description}}</p>
                                    </div>
                                </div>
                                @endif
                            </div>
                            @empty
                            <p>No questionnaires available</p>
                            @endforelse
                        </div>
                    </div>
                </div>
@endsection
<script>
    function fillQuestionnareList(questionnaires){   
        $('#questionnaireListBody_id').empty();
        $.each(questionnaires, function(key , value){
                    
        var card = $('<div class="card" id="card'+value.id +'">'
            + '<div  class="card-header" role="tab" id="questionnaireHeader_'+value.id+'>'
            +'<a class="collapsed d-flex  w-100" data-toggle="collapse" data-parent="#questionnaires_id"'
            +'data-target="#questionnaire_' + value.id + '" aria-expanded="false"'
            +'aria-controls="questionnairesGroup_' + value.id +'">'
            +'<h3 class="mb-0 black-text py-1">'
            + value.name_en + " "
            + (!(value.description_en==="") ?  '<i class="fas fa-angle-down rotate-icon"></i>':'')
            +'</h3>'
            +' </div></div></div>');

        if (!(value.description_en==="")) {
            var cardBody = $('<div id="questionnaire_'+value.id + '" class="collapse"'
                +'aria-labelledby="questionnaireHeader_'+value.id + '" data-parent="#questionnaires_id">'
                + '<div class="card-body>'
                +'<h5 class="card-title">Description: </h5>'
                +'<p class="card-text ml-1">'+ value.description_en + '</p>'
                +' </div>');
            cardBody.appendTo(card);
        }        
        card.appendTo('#questionnaireListBody_id');               
        });
    }

 
</script>