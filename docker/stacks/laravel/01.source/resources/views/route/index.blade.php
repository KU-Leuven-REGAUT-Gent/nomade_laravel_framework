@extends('route.layout')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h1>API routes</h1>
                    @foreach ($routes as $routeKey => $routeValue)
                        @if($routeValue->getPrefix() == 'api')
                            <tr>
                                <td>{{$routeValue->uri}}</td>
                                <td>{{$routeValue->getName()}}</td>
                                <td>{{$routeValue->getPrefix()}}</td>
                                <td>{{$routeValue->getActionMethod()}}</td>
                            </tr>
                        @endif
                    @endforeach
                    <h1>Web routes</h1>
                    @foreach ($routes as $routeKey => $routeValue)
                        @if($routeValue->getPrefix() == null)
                            <tr>
                                <td>{{$routeValue->uri}}</td>
                                <td>{{$routeValue->getName()}}</td>
                                <td>{{$routeValue->getPrefix()}}</td>
                                <td>{{$routeValue->getActionMethod()}}</td>
                            </tr>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


