@extends('company.layout')
@section('show-title','Company ' . $company->id )
@section('content')
    <a href="/companies">< back</a>
    @include('template.show',
             ['model' => $company,
             'editUrl'=>"/companies/".$company->id."/edit",
             'deleteUrl'=>"/companies/".$company->id])


    
    <div class="card mt-3">
        <h3 class="card-header"> Users </h3>
        <div class="card-body ">
            @forelse($company->users as $user)

                    <p class="card-text">

                        <strong>
                            <a href="/users/{{$user->id}}">{{$user->name}}</a>
                        </strong>

                    </p>

            @empty
            <p>No users</p>
            @endforelse
        </div>
    </div>

@endsection