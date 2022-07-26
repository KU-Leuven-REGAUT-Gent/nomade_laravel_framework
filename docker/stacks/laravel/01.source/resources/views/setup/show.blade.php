@extends('setup.layout')
@section('show-title','Setup ' . $setup->id )

@section('content')
    <a href="/setups">< back</a>
    @include('template.show',
             ['model' => $setup,
             'editUrl'=>"/setups/".$setup->id."/edit",
             'deleteUrl'=>"/setups/".$setup->id])


    
    <a href="/setups/{{$setup->id}}/raw" class="btn btn-primary mt-3">View Raw</a>
   

    <div class="card mt-3">
        <div class="card-header d-flex align-items-center">
            <h3 class="mr-auto"> Instruments </h3>
            {{-- <a class="btn btn-primary-outline" href="/instruments/create"><span class="align-middle"><i class="fa fa-plus"></i><b> Create new instrument</span></b></a> --}}
        </div>
        <div class="card-body ">
            @forelse($setup->instruments as $instrument)
                    <p class="card-text">
                        <strong>
                            <a href="/instruments/{{$instrument->id}}">{{$instrument->name}}</a>
                        </strong>
                        {{$instrument->description}}
                    </p>
            @empty
            <p>No instruments</p>
            @endforelse
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header d-flex align-items-center">
            <h3 class="mr-auto"> Measurements </h3>
        </div>
        <div class="card-body ">
            @forelse($setup->measurements as $measurement)
                    <p class="card-text">
                        <strong>
                            <a href="/measurements/{{$measurement->id}}">{{$measurement->name}}</a>
                        </strong>
                        {{$measurement->description}}
                    </p>
            @empty
            <p>No measurements</p>
            @endforelse
        </div>
    </div>



@endsection