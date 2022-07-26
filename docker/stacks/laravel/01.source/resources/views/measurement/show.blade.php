@extends('measurement.layout')
@section('show-title','Measurement ' . $measurement->id )

@section('content')

    <a href="/measurements">< back</a>
    @include('template.show',
             ['model' => $measurement,
             'editUrl'=>"/measurements/".$measurement->id."/edit",
             'deleteUrl'=>"/measurements/".$measurement->id])

    <div class="card mt-3">
        <h3 class="card-header">Measurement</h3>

        <div class="card-body">
            {{-- <p class="card-text mr-auto"> {{$instrumentType->category->name}}</p> --}}
            <div class="card-text mr-auto "> <strong> Created by:  </strong>  <a href="/users/{{$user->id}}">{{$user->name}}</a> </div>
            <div class="card-text mr-auto mt-2"> <strong> Used setup:  </strong> <a href="/setups/{{$setup->id}}">{{$setup->name}}</a> </div>
            <div class="card-text mr-auto mt-2"> <strong> Start time:  </strong> {{$measurement->started_at}} </div>
            <div class="card-text mr-auto mt-2"> <strong> End time:  </strong> {{$measurement->stopped_at}} </div>
            <div class="card-text mr-auto mt-2"> <strong> Maximum cyclecounter:  </strong> {{$measurement->max}} </div>
            <div class="card-text mr-auto mt-2"> <strong> Amount of cycles:  </strong> {{$measurement->count}} </div>
        </div>
    </div>
@endsection