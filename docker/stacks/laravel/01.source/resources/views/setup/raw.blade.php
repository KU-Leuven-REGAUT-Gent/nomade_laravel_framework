@extends('setup.layout')
@section('show-title','Setup ' . $setup->id )

@section('content')

    <h2> Raw data </h2>
    {!! $raw !!}

    <h2> Overview of raw data </h2>
    {!! $table !!}

@endsection