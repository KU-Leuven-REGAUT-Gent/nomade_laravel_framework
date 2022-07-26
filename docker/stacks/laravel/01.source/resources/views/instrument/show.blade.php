@extends('instrument.layout')
@section('show-title','Instrument ' . $instrument->id )

@section('content')

    <a href="/instruments">< back</a>
    @include('template.show',
             ['model' => $instrument,
             'editUrl'=>"/instruments/".$instrument->id."/edit",
             'deleteUrl'=>"/instruments/".$instrument->id])


    <div class="card mt-3">
        <h3 class="card-header">Instrument type</h3>

        <div class="card-body">
            <p class="card-text mr-auto"> {{$instrument->type->name}}</p>
        </div>
    </div>

    <div class="card mt-3">
        <h3 class="card-header">Parameters</h3>

        <div class="card-body">
            @forelse($instrument->parameters as $parameter)
            <div class="card mt-3">
                <h3 class="card-header"><strong>{{$parameter->name}}: </strong> {{$parameter->description}}</h3>
                <div class="card-body">
                    <div class= "row  d-flex">
                        <p class="card-text mr-auto">UUID: <strong>{{$parameter->uuid}}</strong></p>
                        <p class="card-text mr-auto">Default value: <strong>{{$parameter->value}}</strong></p>
                        <p class="card-text mr-auto">Pilot value: <strong>{{$parameter->pivot->value}}</strong></p>

                    </div>

                </div>
            </div>
            @empty
                <p>No instrument available</p>
            @endforelse
        </div>
    </div>




@endsection