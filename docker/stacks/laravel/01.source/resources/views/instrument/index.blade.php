@extends('instrument.layout')

@section('content')
<H1>Instruments</H1>
<a href="/instrumentTypes/create">Create new instrument </a>
        @forelse($instrumentCategories as $instrumentCategory)
            <div class="card mt-3">
                <h3 class="card-header">{{$instrumentCategory[0]->category->name}}</h3>

                <div class="card-body">
                    @forelse($instrumentCategory as $instrumentType)

                            <div class='row'>
                                <div class='col-xs-8'>
                                    <strong>
                                        <a href="/instruments/{{$instrument->id}}">{{$instrument->name}}</a> :
                                    </strong>
                                </div>
                                <div class='col-xs-4 text-right'>
                                   <a style='padding: 5px'>{{$instrument->description}}</a>
                                </div>
                             </div>
                        @empty
                        <p>No instrument available</p>
                    @endforelse
                </div>
            </div>
        @empty
            <p>No instrument category available</p>
        @endforelse

@endsection