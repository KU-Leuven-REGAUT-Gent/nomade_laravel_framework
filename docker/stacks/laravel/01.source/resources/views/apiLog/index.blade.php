@extends('apiLog.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">API Log</div>
            <div class="card-body">
                {{$apiLogs->links()}}
                @forelse($apiLogs as $apiLog)
                    <p><strong>
                        <a href="/apiLogs/{{$apiLog->id}}">
                          <strong>{{$apiLog->method}}</strong>
                          <strong>{{$apiLog->statusCode}}</strong>
                          {{$apiLog->url}}
                        </a>
                    </p>
                @empty
                    <p>No logs available</p>
                @endforelse
                {{$apiLogs->links()}}
            </div>
        </div>
    </div>
</div>
@endsection