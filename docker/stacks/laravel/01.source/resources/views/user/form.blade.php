
    <div class="card mt-3">
        <h5 class="card-header"> User </h5>
        <div class="card-body ">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" autocomplete="off" value="{{old('username') ?? $user->name}}" class="form-control" placeholder="Enter user"/>
                @error('username')<div style="color: red;">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" autocomplete="off" value="{{old('password')}}" class="form-control" placeholder="Enter password"/>
                @error('password')<p style="color: red;">{{$message}}</p>@enderror
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <h3 class="card-header"> Company: </h3>
        <div class="card-body ">
            <div class="form-group">
                <select class="form-control" name="company_id">
                    @foreach($companies as $company)
                        <option {{( (old('company_id') ?? $user->company->id)==$company->id  ? 'selected="selected"' : '' ) }}
                            value="{{$company->id}}">{{$company->name_en}}</option>
                    @endforeach
                </select>
                @error('ompany_id')<div style="color: red;">{{ $message }}</div>@enderror
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <h3 class="card-header"> Add roles: </h3>
        <div class="card-body ">
            <div class="form-group">
                @foreach($roles as $role)
                    <div class="form-check">
                        <input  type="checkbox"
                                class="styled"
                                id="role_{{$role->id}}"
                                name="roles[{{$role->id}}]"
                                value="{{$role->id}}" {{(old("roles.". $role->id) ?? ($user->roles->find($role->id)==null ? null : $user->roles->find($role->id)->id)) ==($role->id) ? 'checked':''}} >
                        <label class="form-check-label" for="role_{{$role->id}}">{{$role->name_en}}</label>
                    </div>
                @endforeach
                @error('roles')<p style="color: red;">{{$message}}</p>@enderror
            </div>
        </div>
    </div>


    @csrf