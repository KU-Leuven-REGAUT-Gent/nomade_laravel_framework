@if(isset($questionnaire->id))
    <form action="/questionnaires/{{$questionnaire->id}}/questions/{{$question->id}}@yield('form-action')" method="post">
@else
    @if(isset($questionnaire->id))
        <form action="/questions/{{$question->id}}@yield('form-action')" method="post">
    @else
        <form action="@yield('form-action')" method="post">
    @endif
@endif

    @yield('form-method')
    <div class="card">
        <div class="card-header">@yield('form-title')</div>
        <div class="card-body">
            <div class="form-group">
                <label for="answer_type_id">Answer Type:</label>
                @php($answer->type->id = (old('answer_type_id') ?? $answer->type->id))
                <select class="form-control" name="answer_type_id" id="answer_type_id" onchange="setOptionField()">
                    @foreach($answer_types as $answer_type)
                        <option {{$answer->type->id==$answer_type->id?'selected="selected"':''}} id="answer_type_id"  value="{{$answer_type->id}}">{{$answer_type->name_en}} </option>

                        @endforeach
                </select>

            </div>
            <!---- div answerTypeGroupDiv controlled by setOptionField function ---->

            @if ($answer->type->id >= 10 && $answer->type->id  < 30 && $answer->type->id  != 25 )
                <div class="form-group" id="answerTypeGroupDiv">
            @else
                 <div class="form-group" id="answerTypeGroupDiv" style="display: none">
            @endif

                <div class="row">
                  <div class="col-6">
                    <label for="option[min]">Lower limit:</label>
                    <input  type="text" class="form-control"
                            id="option_min"
                            name="option[min]"
                            placeholder="Enter lower limit"
                            value="{{old('option[min]') ?? ($answer->option==null ? null : $answer->option->min) }}"
                            autocomplete="off">
                    @error('option_min]')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="col-6">
                    <label for="option[max]">Higher limit</label>
                    <input  type="text" class="form-control"
                            id="option_max"
                            name="option[max]"
                            placeholder="Enter upper limit"
                            value="{{old('option[max]')  ?? ($answer->option==null ? null : $answer->option->max)}}"
                            autocomplete="off">
                    @error('option[max]')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                </div>
            </div>

            <div class="form-group">
                <label for="name_en">Answer</label>
                <input type="text" class="form-control" name="name_en" placeholder="Enter answer (English)" value="{{old('name_en') ?? $answer->name_en}}" autocomplete="off">
                <input type="text" class="form-control" name="name_nl" placeholder="Enter answer (Dutch)" value="{{old('name_nl') ?? $answer->name_nl}}" autocomplete="off">
                <input type="text" class="form-control" name="name_fr" aria-describedby="answerHelp" placeholder="Enter answer (French)" value="{{old('name_fr') ?? $answer->name_fr}}" autocomplete="off">
                <small id="answerHelp" class="form-text text-muted">Give your answer a title in all three languages (English, Dutch and French).</small>
                @error('name_en')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="description_en">Tooltip</label>
                <textarea rows="4" class="form-control" name="description_en" placeholder="Enter tooltip (English)" autocomplete="off">{{old('description_en') ?? $answer->description_en}}</textarea>
                <textarea rows="4" class="form-control" name="description_nl" placeholder="Enter tooltip (Dutch)" autocomplete="off">{{old('description_nl') ?? $answer->description_nl}}</textarea>
                <textarea rows="4" class="form-control" name="description_fr" aria-describedby="tooltipHelp" placeholder="Enter tooltip (French)" autocomplete="off">{{old('description_fr') ?? $answer->description_fr}}</textarea>
                <small id="tooltipHelp" class="form-text text-muted">Give your answer a tooltip in all three languages (English, Dutch and French).</small>
            </div>

        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">@yield('form-button')</button>
    @csrf


    <script>
        // Answer option card body control
        function setOptionField(){
            var answer_type_id = document.getElementById("answer_type_id").value;

            if (answer_type_id >= 10 && answer_type_id < 30  && answer_type_id != 25 ) {
                $('#answerTypeGroupDiv').show();
            } else {
                $('#answerTypeGroupDiv').hide();
            }
        }
    </script>
</form>