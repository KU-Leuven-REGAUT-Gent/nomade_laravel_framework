@extends('parameterValue.layout')

@section('form-action','/parameterValues/'.$parameterValue->id)
@section('form-button','Edit parameter value')

@section('content')
    <form action=@yield('form-action') method="post">
        @method('PATCH')

        <div class="card mt-3">
            <div class="card-header d-flex align-items-center">
                <h3 class="mr-auto">Parameter value: {{$parameterValue->name}} </h3>
            </div>
            <div class="card-body">
            <strong> Description table: </strong>
                <div class="form-group">

                    <textarea class="form-control" name="description_en"  id="description_en_ID" rows="20"> {{$text}}</textarea>
                </div>
            </div>
        </div>
    

        <button type="submit" class="btn btn-primary mt-3 mb-3">@yield('form-button')</button>
        @csrf
    </form>
@endsection



