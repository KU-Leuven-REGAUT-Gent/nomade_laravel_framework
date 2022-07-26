@extends('parameter.layout')

@section('content')
    <h1>Parameter information</h1>
    <div class="card mt-3">
        <h3 class="card-header">Links</h3>
        <div class="card-body">
            <div>Functionality has to be implemented based on the parameter ID or Parameter UUID</div>
            <div>A more complete list as JSON can be requested from the <a href="/api/parameters">API</a>.</div>
            <div>For ease of programming a define list is available for <a href="{{ route('parameters.defineJava') }}">Java</a>.</div>
            <div>For ease of programming a define list is available for <a href="{{ route('parameters.defineCpp') }}">C and C++</a>.</div>
        </div>
    </div>

    <div class="card mt-3">
        <h3 class="card-header">Legend</h3>
        <div class="card-body">
            <p><a href="#"><strong>ID (Hex):</strong></a> The Parameter_ID used in the Database, this also has to be used on both Mainboard and Android device to detect functionalities based on that exact parameter.</p>
            <p><a href="#"><strong>UUID:</strong></a> UUID of the parameter.</p>
            <p><a href="#"><strong>Name:</strong></a> Name of the parameter.</p>
            <div>
                <a href="#"><strong>Datatype:</strong></a> Solely used for representatin within the Android app, all parameter values are stored as FLOAT_32.
                <ul>
                    <li><a href="#"><strong>Datatype 0 (Strict):</strong></a> Only a restricted amount of values are possible (see associated table).</li>
                    <li><a href="#"><strong>Datatype 1 (Integer):</strong></a> An integer (natural number) visualisation in the Android app.</li>
                    <li><a href="#"><strong>Datatype 2 (Real):</strong></a> A real (decimal number) visualisation in the Android app.</li>
                    <li><a href="#"><strong>Datatype 3 (Boolean):</strong></a> A boolean for visualisation in the Android app.</li>
                    <li><a href="#"><strong>Datatype 4 (Existing Instrument ID):</strong></a> A pointer to an already existing Instrument ID in the setup.</li>
                    <li><a href="#"><strong>Datatype 5 (MAC part):</strong></a> 3 Bytes of a MAC address (Can be the lower or higher part, notation: FF:FF:FF).</li>

                </ul>
            </div>
            <p><a href="#"><strong>Mainboard:</strong></a> If this is set to False, the parameter has no functional link with the Mainboard. Only the Android Device uses this parameter.</p>
            <div>
                <a href="#"><strong>Config level:</strong></a> Parameters can be configured at 3 different levels, this property limits the configuration of the parameter to a certain level.
                <ul>
                    <li><a href="#"><strong>Level 0 (Instrument Type):</strong></a> The parameter value can only be set during instrument type creation. (Via website)</li>
                    <li><a href="#"><strong>Level 1 (Instrument):</strong></a> The parameter value can be changed when a setup is being configured. (Via the app)</li>
                    <li><a href="#"><strong>Level 2 (Measurement):</strong></a> The parameter value can be changed before every new `measurement`. (Via the app)</li>
                </ul>
            </div>
            <p><a href="#"><strong>Min:</strong></a> The minimum valid value for a parameter.</p>
            <p><a href="#"><strong>Max:</strong></a> The maximum valid value for a parameter.</p>
            <p><a href="#"><strong>Value:</strong></a> The default value for a parameter.</p>
        </div>
    </div>

    <div class="card mt-3">
        <h3 class="card-header">Parameters</h3>
        <div class="card-body">
            <table   class="table table-striped table-responsive"  id="datatable">
                <thead >
                    <tr>
                        <th >ID (Hex)</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Datatype</th>
                        <th>Mainboard</th>
                        <th>Config level</th>
                        <th>Min</th>
                        <th>Max</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($parameters as $parameter)
                        <tr>
                            <td>{{$parameter->hexId}}</td>
                            <td ><a href="parameters/{{$parameter->id}}">{{$parameter->uuid}}</a></td>
                            <td ><a href="parameters/{{$parameter->id}}">{{$parameter->name}}</a></td>
                            <td >{{$parameter->datatype}}</td>
                            <td >{{$parameter->mainboard}}</td>
                            <td >{{$parameter->level}}</td>
                            <td >{{$parameter->min}}</td>
                            <td >{{$parameter->max}}</td>
                            <td>{{$parameter->value}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable( );// https://datatables.net
        });
    </script>
@endsection