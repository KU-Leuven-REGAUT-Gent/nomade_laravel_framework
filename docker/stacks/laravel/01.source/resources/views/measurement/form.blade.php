@extends('template.form',['model'=>$measurement])

@section('form-content')


<div class="card mt-3">
    <h3 class="card-header">
        Select user
    </h3>

    <div class="card-body">
        <select class="form-control" name="user_name" id="user_id">
            <option value={{null}}> Select a user </option>
             @foreach($users as $user)
                <option {{ ( (old('user_id') ?? $measurement->user_id)==$user->id  ? 'selected="selected"' : '' ) }}
                    value="{{$user->id}}">{{$user->username}}</option>
            @endforeach --}}
        </select>
        @error('user_id')<div style="color: red;">{{ $message }}</div>@enderror
    </div>
</div>

<div class="card mt-3">
    <h3 class="card-header">
        Select setup
    </h3>

    <div class="card-body">
        <select class="form-control" name="setup_name" id="setup_id">
            <option value={{null}}> Select a setup </option>
             @foreach($setups as $setup)
                <option {{ ( (old('setup_id') ?? $measurement->setup_id)==$setup->id  ? 'selected="selected"' : '' ) }}
                    value="{{$setup->id}}">{{$setup->name}}</option>
            @endforeach --}}
        </select>
        @error('setup_id')<div style="color: red;">{{ $message }}</div>@enderror
    </div>
</div>
<div class="card mt-3">
    <h3 class="card-header">
        Set measurement period
    </h3>

    <div class="card-body">
        <strong> Start date + time (UTC): </strong>
        <input  class="form-control"  type="text" id="start_id" name="started_at"
                value="{{(old('start_id') ?? $measurement->started_at)==null  ? Carbon\Carbon::now()->format('Y-m-d')." ".Carbon\Carbon::now()->format('H:i') : (old('stop_id') ?? $measurement->started_at )}}" />
        <div class="mt-3"> <strong> End date + time (UTC): </strong> </div>
        <input  class="form-control"  type="text" id="stop_id" name="stopped_at"
                value=" {{(old('stop_id') ?? $measurement->stopped_at)==null  ? Carbon\Carbon::now()->format('Y-m-d')." ".Carbon\Carbon::now('+01:00')->format('H:i') : (old('stop_id') ?? $measurement->stopped_at )}}" />
    </div>
</div>



@endsection