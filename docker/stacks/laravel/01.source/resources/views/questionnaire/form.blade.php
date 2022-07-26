@extends('template.form',['model'=>$questionnaire])

@section('form-content')
   <!------ category card ----->
    <div class="card mt-3 ">

        <div class="card-header d-flex align-items-center">
            <h3 class="mr-auto"> Category </h3>
        </div>

        <div class="card-body">
            <div class="form-group">
                <select class="form-control" name="questionnaire_category_id">
                    @foreach($questionnaireCategories as $questionnaireCategory)
                        <option {{ (old('questionnaire_category_id') ?? ($questionnaire->category==null ? '' : $questionnaire->category->id)) ==($questionnaireCategory->id) ? 'selected="selected"':''}}
                            value="{{$questionnaireCategory->id}}">{{$questionnaireCategory->name_en}}</option>
                    @endforeach
                </select>
                @error('questionnaire_category_id')<div style="color: red;">{{ $message }}</div>@enderror
            </div>
        </div>
    </div>
       <!------ Group card ----->
       <div class="card mt-3 ">
        <div class="card-header d-flex align-items-center">
            <h3 class="mr-auto"> Group </h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <select class="form-control" name="questionnaire_group_id">
                    @foreach($questionnaireGroups as $questionnaireGroup)
                        <option {{ (old('questionnaire_group_id') ?? ($questionnaire->group==null ? '' : $questionnaire->group->id)) ==($questionnaireGroup->id) ? 'selected="selected"':''}}
                            value="{{$questionnaireGroup->id}}">{{$questionnaireGroup->name_en}}</option>
                    @endforeach
                </select>
                @error('questionnaire_group_id')<div style="color: red;">{{ $message }}</div>@enderror
            </div>
        </div>
    </div>
@endsection