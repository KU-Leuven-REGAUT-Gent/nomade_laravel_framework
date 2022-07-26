@extends('instrumentType.layout')
@section('show-title','Instrument type ' . $instrumentType->id )

@section('content')

    <a href="/instrumentTypes">< back</a>
    @include('template.show',
             ['model' => $instrumentType,
             'editUrl'=>"/instrumentTypes/".$instrumentType->id."/edit",
             'deleteUrl'=>"/instrumentTypes/".$instrumentType->id])


    <div class="card mt-3">
        <h3 class="card-header">Category</h3>

        <div class="card-body">
            <p class="card-text mr-auto"> {{$instrumentType->category->name}}</p>
        </div>
    </div>

    <div class="card mt-3">
        <h3 class="card-header">Parameters</h3>

        <div class="card-body">
            @forelse($instrumentType->parameters as $parameter)
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
                <p>No instrument type available</p>
            @endforelse
        </div>
    </div>




@endsection