@extends('template.form',['model'=>$instrument])

@section('form-content')


<div class="card mt-3">
    <h3 class="card-header">
        Select category
    </h3>

    <div class="card-body">
        <select class="form-control" name="instrument_category_id">
            @foreach($categories as $category)
                <option {{ ( (old('instrument_category_id') ?? $instrument->category->id)==$category->id  ? 'selected="selected"' : '' ) }}
                    value="{{$category->id}}">{{$category->name_en}}</option>
            @endforeach
        </select>
        @error('instrument_category_id')<div style="color: red;">{{ $message }}</div>@enderror
    </div>
</div>

<div class="card mt-3">
    <h3 class="card-header">
        Set parameters
    </h3>

    <div class="card-body">
        @foreach($parameters as $parameter)
        <div class="row">
            <div class="col-md-9 ml-3">
                <input type="hidden" name="parameters[{{$parameter->id}}][checked]" value='0'>
                <input  type="checkbox"
                        class="form-check-input" id="parameter_{{$parameter->id}}"
                        name="parameters[{{$parameter->id}}][checked]"
                        value='1'  {{  (old('parameters.'. $parameter->id.'.checked')?? $instrument->parameters->contains($parameter->id))=='1'  ? 'checked':''}} >
                <label  class="form-check-label ml-2 "
                        for="role_{{$parameter->id}}"><strong>{{$parameter->name_en}} </strong><em>({{$parameter->description_en}})</em></label>
                @error('parameters')<div style="color: red;">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-2">
                <div class="input-group-prepend">
                    <span class="input-group-text  ml-auto">pilot value</span>
                    <input type="hidden"  name="parameters[{{$parameter->id}}][id]" value="{{$parameter->id}}">
                    <input  type="text"
                            class="form-control  ml-auto"
                            id="pivotValue_{{$parameter->id}}"
                            name="parameters[{{$parameter->id}}][value]"
                            value="{{ old('parameters.'. $parameter->id . '.value') ?? ($instrument ->parameters->find($parameter->id) == null ? null : $instrument ->parameters->find($parameter->id)->pivot->value)}}">
                    @error('pivotValues')<div style="color: red;">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>
        @endforeach
        @error('parameters')<p style="color: red;">{{$message}}</p>@enderror
    </div>
</div>


@endsection