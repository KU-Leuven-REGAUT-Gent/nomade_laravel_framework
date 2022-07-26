<!-- @extends('parameterValue.layout')

@section('show-title','Parameter value ' . $parameterValue->id . '-' . $parameterValue->name) -->

@section('content')
<h1>Parameter value: {{$parameterValue->name}}</h1>
    <div class="card mt-3">
    <div class="card-header">
                        <div class="d-flex align-items-center">
                        
                        <a class=" d-flex  w-100 ">
                                <h3 class="mb-0 black-text py-1">
                                description
                                </h3>
                            </a>
                            <div class="btn-group flex-shrink-1" role="group">
                                @include('button.edit', array('class'=>$parameterValue,'url'=>"/parameterValues/".$parameterValue->id."/edit"))
                            </div>
                        </div>
                    </div>
        

 


        <div class="card-body">
        <p><strong>ID:</strong> {{$parameterValue->id}}</p>
        {!!html_entity_decode($parameterValue->description,ENT_XML1, 'UTF-8')!!}
        </div>
    </div>



@endsection


