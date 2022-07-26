@extends('company.layout')

@section('content')
<h1>Companies</h1>
    <a href="/companies/create">Create new company</a>

    <div class="card mt-3">
        <h3 class="card-header">List</h3>
        <div class="card-body">
            @forelse($companies as $company)
                <p class="card-text mb-n1">
                    <p><strong>
                        <a href="/companies/{{$company->id}}">{{$company->name}}</a>
                    </strong> {{$company->description}}</p>
                </p>
            @empty
                <p>No companies available</p>
            @endforelse
        </div>
    </div>
@endsection