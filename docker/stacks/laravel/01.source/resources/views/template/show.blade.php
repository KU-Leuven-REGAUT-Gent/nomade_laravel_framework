<div class="d-flex justify-content-between">
    <h1>
        @yield('show-title')
        
    </h1>
    <div class="btn-group ml-left" role="group">
        @include('button.edit', array('class'=>$model,'url'=> $editUrl))
        @include('button.delete', array('class'=>$model,'url'=> $deleteUrl))
    </div>
</div>

<div class="card mt-3">

        <h3 class="card-header">
            Information
            {{-- <img class="img-lang  height: 25% \9" src="/img/lang/{{$lang}}.png" /> --}}
        </h3>


        <div class="card-body">
            @if (!empty($model->name ))
            <p class="card-text mr-auto"> <strong>Name: </strong>{{$model->name }}</p>
            @endif
            @if (!empty($model->description ))
            <p class="card-text mr-auto"> <strong>Description: </strong>{{$model->description  }}</p>
            @endif
            @if (!empty($model->company))
            <strong>Company: </strong>
                <a href="/companies/{{ $user->company->id }}">{{ $user->company->name }}</a>

            @endif
        </div>
    </div>
