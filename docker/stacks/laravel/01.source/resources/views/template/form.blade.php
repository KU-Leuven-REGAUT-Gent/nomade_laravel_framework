<h1> @yield('form-title')</h1>
<!------ Name card ----->
<div class="card mt-3 mx-3">
    <h3 class="card-header"> @yield('form-name') </h3>

    <div class="card-body">
    @foreach(array('en','nl','fr') as $lang)
        <div class="d-flex  flex-row  align-items-center">
            <img class="img-fluid d-flex flex-col "  style= "width: 4%;" src="/img/lang/{{$lang}}.png" />
            <div class="dflex flex-col w-100 ml-2">
                <input  type="text"
                        name="name_{{$lang}}"
                        autocomplete="off"
                        value="{{old('name_'.$lang)?? $model->getAttribute('name_'.$lang)}}"
                        class="form-control" />
                @error('name_'.$lang)
                    <div style="color: red;">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
    @endforeach
    </div>
</div>

<!------ Description card ----->
<div class="card mt-3 mx-3">
    <h3 class="card-header"> @yield('form-description') </h3>

    <div class="card-body">
    @foreach(array('en','nl','fr') as $lang)
        <div class="d-flex  flex-row  align-items-center">

             <img class="img-fluid d-flex flex-col "  style= "width: 4%;" src="/img/lang/{{$lang}}.png" />

            <div class="dflex flex-col w-100 ml-2">
                <textarea rows="3"
                          class="form-control "
                          name="description_{{$lang}}"
                          placeholder="Enter description ({{$lang}})"
                          autocomplete="off">{{old('description_'.$lang) ?? $model->getAttribute('description_'.$lang) }}</textarea>
                @error('description_'.$lang)
                    <div style="color: red;">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
    @endforeach
    </div>
</div>
<div class="container mt-3">
    @yield('form-content')
</div>
