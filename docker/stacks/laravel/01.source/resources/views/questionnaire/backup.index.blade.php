@extends('questionnaire.layout')

@section('content')
<H1>Questionnaires</H1>

<div class="card mt-3 ">
  <div class="card-header">
    <h3 class="mr-auto"> Create </h3>
  </div>
  <div class="card-body  d-flex justify-content-around">
    <!-- questionnaire -->
    <a  class="btn btn-primary-outline"
    href="/questionnaires/create">
    <span
        class="align-middle">
        <i class="fa fa-plus"></i>
        <b> new questionnaire</b>
    </span>
    </a>
    <!-- group -->
    <a  class="btn btn-primary-outline"
    href="/questionnaireGroups/create">
    <span
        class="align-middle">
        <i class="fa fa-plus"></i>
        <b> new group</b>
    </span>
    </a>
    <!-- categorie -->
    <a  class="btn btn-primary-outline"
    href="/questionnaireCategories/create">
    <span
        class="align-middle">
        <i class="fa fa-plus"></i>
        <b> new category</b>
    </span>
    </a>
  </div>
</div>
<!-- sort -->
<div class="d-flex align-items-center mt-3">
  <h1>list</h1>
  <div class="ml-auto p-2">
    <button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      sort
    </button>
    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="/questionnaires?sort=category">category</a>
      <a class="dropdown-item" href="/questionnaires?sort=group">group</a>
    </div>
  </div>
</div>

<div class="accordion md-accordion mt-3" id="questionnairesGroup" role="tablist" aria-multiselectable="true">
  @forelse($questionnairesGroup as $questionnaires)
    <div class="card">
    <!-- Card header -->
      <div class="card-header" role="tab" id="questionnairesHeader_{{$questionnaires[0]-> $groupByPar->id}}"  >
        <a class="collapsed" data-toggle="collapse" data-parent="#questionnairesGroup" data-target="#questionnairesGroup_{{$questionnaires[0]-> $groupByPar->id}}"
          aria-expanded="false" aria-controls="questionnairesGroup_{{$questionnaires[0]-> $groupByPar->id}}">
          <h3 class="mb-0 black-text">
            {{$questionnaires[0]-> $groupByPar->id }} - {{$questionnaires[0]-> $groupByPar->name}} <i class="fas fa-angle-down rotate-icon"></i>
          </h3>
        </a>
      </div>

      <!-- Card body -->
      <div id="questionnairesGroup_{{$questionnaires[0]-> $groupByPar->id}}" class="collapse"  aria-labelledby="questionnairesHeader_{{$questionnaires[0]-> $groupByPar->id}}"
      data-parent="#questionnairesGroup">
        <div class="card-body">
          <div class="accordion md-accordion mt-3" id="questionnaires" role="tablist" aria-multiselectable="true">
          @forelse($questionnaires as $questionnaire)
            <div class="card mt-1">
                <!-- Card header -->

                <div class="card-header" role="tab" id="questionnaireHeader_{{$questionnaire->id}}"  >
                  <div class="d-flex  align-items-center my-n2">
                      <a class="collapsed d-flex  w-100" data-toggle="collapse" data-parent="#questionnaires" data-target="#questionnaire_{{$questionnaire->id}}"
                      aria-expanded="false" aria-controls="questionnairesGroup_{{$questionnaire->id}}">
                        <h3 class="mb-0 black-text py-1">
                          {{$questionnaire->name}}
                          @if (!empty($questionnaire->description))
                              <i class="fas fa-angle-down rotate-icon"></i>
                          @endif
                        </h3>
                      </a>
                    @include('button.show', array('class'=>$questionnaire,'url'=>"/questionnaires/". $questionnaire->id))
                </div>
              </div>

              <!-- Card body -->
              @if (!empty($questionnaire->description))
                <div id="questionnaire_{{$questionnaire->id}}" class="collapse"  aria-labelledby="questionnaireHeader_{{$questionnaire->id}}"
                data-parent="#questionnaires">
                  <div class="card-body">
                    <p class="card-text mr-auto">{{$questionnaire->description}}</p>
                  </div>
                </div>
              @endif
            </div>
          @empty
          <p>No questionnaire available</p>
          @endforelse
          </div>
        </div>
      </div>
    </div>
  @empty
              <p>No questionnaire {{$groupByPar}} available</p>
  @endforelse
</div>









@endsection