@extends('measurement.layout')

@section('content')
<H1>Measurement</H1>
<a href="/measurements/create">Create new measurement</a>
        @forelse($measurementsCategorized as $measurementsCategory)
            <div class="card mt-3">
                <h3 class="card-header">{{$measurementsCategory[0]->category->name}}</h3>

                <div class="card-body">
                    <!--  https://datatables.net used to create the sortable table -->
                    <table   class="table table-striped"  id="datatable">
                        <thead >
                            <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th> Description </th>
                                <th> Start time </th>
                                <th> End time </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($measurementsCategory as $measurement)
                                <tr>
                                    <td style="width:5%">
                                        {{$measurement->id}}
                                    </td>
                                    <td style="width:35%">
                                        <strong>
                                            <a href="/measurements/{{$measurement->id}}">{{$measurement->name}}</a>
                                        </strong>
                                    </td>
                                    <td style="width:20%">
                                        {{$measurement->description}}
                                    </td>
                                    <td style="width:20%">
                                        {{$measurement->started_at}}
                                    </td>
                                    <td style="width:20%">
                                        {{$measurement->stopped_at}}
                                    </td>
                                    <td style="width:5%">
                                        @include('button.delete', array('class'=>$measurement,'url'=>"/measurements/".$measurement->id))
                                    </td>
                                </tr>
                            @empty
                                <p>No instrument type available</p>
                            @endforelse
                        </tbody>
                    </table>


                </div>
            </div>
        @empty
            <p>No measurements available</p>
        @endforelse

        <script>
            $(document).ready(function() {
                $('#datatable').DataTable( );// https://datatables.net
            });
        </script>
@endsection