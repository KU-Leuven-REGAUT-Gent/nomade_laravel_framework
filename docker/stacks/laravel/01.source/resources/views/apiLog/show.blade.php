@extends('apiLog.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card mt-8">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h3 class="mr-auto">API Log: {{$apiLog->id}}</h3>
                </div>
            </div>
            <div class="card-body">
                <div><strong>Method:</strong> {{$apiLog->method}}</div>
                <div><strong>URL:</strong> {{$apiLog->url}}</div>
                <div><strong>Status Code:</strong> {{$apiLog->statusCode}}</div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h3 class="mr-auto">Request:</h3>
                </div>
            </div>
            <div class="card-body">
                {{$apiLog->request}}
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h3 class="mr-auto">Response:</h3>
                </div>
            </div>
            <div class="card-body">
                {{$apiLog->response}}
            </div>
        </div>
    </div>
</div>
@endsection