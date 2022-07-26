@extends('status.layout')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h1>Statusses</h1>
                    @foreach ($statusses as $statusKey => $statusValue)
                        <tr>
                            <td><strong>{{ $statusKey }}</strong></td>
                            <td>{{ $statusValue }}</td>
                        </tr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


