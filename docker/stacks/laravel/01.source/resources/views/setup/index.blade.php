@extends('setup.layout')

@section('content')
    <h1>Setups</h1>
    <a href="/setups/create">Create new setup</a>
    @forelse($setupGroupedCategories as $setupGroup)
    <div class="card mt-3">
        <h3 class="card-header">{{$setupCategories[$setupGroup[0]->setup_category_id]->name_en}}</h3>

        <div class="card-body">
        @forelse($setupGroup as $setup)
            <div class='row'>
                <div class='col-xs-8'>
                    <strong>
                        <a href="/setups/{{$setup->id}}">{{$setup->name}}</a>
                    </strong>
                </div>
                <div class='col-xs-4 text-right'>
                <a style='padding: 5px'>{{$setup->description_en}}</a>
                </div>
            </div>
        @empty
            <p>No setups available</p>
        @endforelse
        </div>
    </div>
    @empty
    <p>No setups category available</p>
    @endforelse
@endsection