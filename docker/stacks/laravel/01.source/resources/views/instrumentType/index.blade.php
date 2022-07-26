@extends('instrumentType.layout')

@section('content')
<H1>Instrument types</H1>
<a href="/instrumentTypes/create">Create new instrument type</a>
        @forelse($instrumentTypeCategories as $instrumentTypeCategory)
            <div class="card mt-3">
                <h3 class="card-header">{{$instrumentTypeCategory[0]->category->name}}</h3>

                <div class="card-body">
                    @forelse($instrumentTypeCategory as $instrumentType)

                            <div class='row'>
                                <div class='col-xs-8'>
                                    <strong>
                                        <a href="/instrumentTypes/{{$instrumentType->id}}">{{$instrumentType->name}}</a> :
                                    </strong>
                                </div>
                                <div class='col-xs-4 text-right'>
                                   <a style='padding: 5px'>{{$instrumentType->description}}</a>
                                </div>
                             </div>
                        @empty
                        <p>No instrument type available</p>
                    @endforelse
                </div>
            </div>
        @empty
            <p>No instrument type category available</p>
        @endforelse

@endsection