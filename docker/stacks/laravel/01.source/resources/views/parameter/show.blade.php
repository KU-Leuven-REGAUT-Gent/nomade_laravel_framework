@extends('parameter.layout')
@section('show-title','Parameter ' . $parameter->id . '-' . $parameter->name)

@section('content')
    <h1>Parameter: {{$parameter->name}}</h1>
    <div class="card mt-3">
        <h3 class="card-header">Parameter information</h3>
        <div class="card-body">
            <p><strong>ID:</strong> {{$parameter->id}}</p>
            <p><strong>UUID:</strong> {{$parameter->uuid}}</p>
            <p><strong>Name:</strong> {{$parameter->name}}</p>
            <p><strong>Description:</strong> {{$parameter->description}}</p>
            <p><strong>Datatype:</strong> {{$parameter->datatype}}</p>
            <p><strong>Mainboard:</strong> {{$parameter->mainboard}}</p>
            <p><strong>Config level:</strong> {{$parameter->level}}</p>
            <p><strong>Min:</strong> {{$parameter->min}}</p>
            <p><strong>Max:</strong> {{$parameter->max}}</p>
            <p><strong>Value:</strong> {{$parameter->value}}</p>
        </div>
    </div>
    <div class="card mt-3">
        <h3 class="card-header">Possible values + description</h3>
        <div class="card-body">
            <table>
                <tbody>
                    <tr>
                        <th class="align-center pr-3">Value (Hex)</th>
                        <th class="align-center pr-3">Value (Dec)</th>
                        <th>Description</th>
                    </tr>
                    @foreach($parameter->values as $parameterValue)
                        <tr>
                            <td class="text-center pr-3">{{$parameterValue->hexValue}}</td>
                            <td class="text-center pr-3">{{$parameterValue->value}}</td>
<<<<<<< HEAD
                            <td ><a href="{{route('parameterValues.show', $parameterValue->id)}}" >{{$parameterValue->name}}}</a></td>
=======
                            <td ><a href="{{route('parameterValues.show', $parameterValue->id)}}" >{{$parameterValue->name}}</a></td>
>>>>>>> my-temporary-work
                            <!-- <td>{{$parameterValue->name}}</td> -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection