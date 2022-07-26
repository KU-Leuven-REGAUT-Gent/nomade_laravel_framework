@extends('template.form',['model'=>$question])

@section('form-content')
     <div class="card mt-3">
        <h3 class="card-header">Question Type / Bullet Type</h3>
        <div class="card-body">
            <div class="form-group">
                <select class="form-control" name="question_type_id">
                    @foreach($questionTypes as $questionType)
                        <option {{(old('question_type_id') ?? $question->type->id)==$questionType->id?'selected="selected"':''}} value="{{$questionType->id}}">{{$questionType->name_en}}</option>
                    @endforeach
                    @error('question_type_id')<div style="color: red;">{{ $message }}</div>@enderror
                </select>
            </div>
        </div>
    </div>

    <!----- Conditions ---->


    @if ((old('condition.condition_question_id') ?? $condition['question_id'])==null)
        <div>
            <a onclick="toggleConditionCard()" class="btn btn-primary mt-3 mb-3" id="conditionBtn" style="color: white"><i class="fa fa-plus pr-2"></i>Add condition</a>
        </div>
        <div class="card mt-3" id="conditionCard" name="conditionCard" style="display: none">
    @else
        <div>
            <a onclick="toggleConditionCard()" class="btn btn-primary mt-3 mb-3" id="conditionBtn" style="color: white"><i class="fa fa-minus pr-2"></i>Remove condition</a>
        </div>
        <div class="card mt-3" id="conditionCard" name="conditionCard">
    @endif
        <div class="card-header d-flex align-items-center">
            <h3 class="mr-auto"> Condition </h3>
        </div>
        <div class="card-body" id="conditionID">

            {{-- questionDropdown --}}
            @php($condition['question_id'] = (old('condition.condition_question_id') ?? $condition['question_id']))
            <div class="d-flex align-items-center">
                <label class="col-2 " for="condition_question_id">Parent question:</label>
                <select class="col form-control " name="condition[condition_question_id]" id="condition_question_id" onchange="updateAnswers()">
                    <option value={{null}}> Select a question </option>
                    @foreach($questionList as $questionItem)
                        <option {{$condition['question_id'] == $questionItem->id ? 'selected="selected"' : ''}}
                            name="condition[question_id]" data-field-id="condition_question_id"
                            value="{{$questionItem->id}}">
                                {{$questionItem->id}} - {{$questionItem->name_en}}
                        </option>
                    @endforeach
                </select>
            </div>
            @error('condition.condition_question_id')<div style="color: red;">{{ $message }}</div>@enderror
            {{-- answerDropdown --}}
            @php ($answerList = ($condition['question_id'] != null ? $questionList->find($condition['question_id'])->answers : []))
            @php ($condition['answer_id'] = (old('condition.condition_answer_id') ?? $condition['answer_id']))
            <div class="d-flex align-items-center">
                <label class="col-2 " for="condition_answer_id">Parent answer:</label>
                <select name="condition[condition_answer_id]" id="condition_answer_id" class=" col form-control">
                    <option value={{null}}> Select an answer </option>
                    @foreach($answerList as $answerItem)
                        <option {{$condition['answer_id'] == $answerItem->id ? 'selected="selected"' : ''}}
                            name="condition[answer_id]" data-field-id="condition_answer_id"
                            value="{{$answerItem->id}}">
                                {{$answerItem->id}} - {{$answerItem->name_en}}
                        </option>
                    @endforeach
                </select>
            </div>
            @error('condition.condition_answer_id')<div style="color: red;">{{ $message }}</div>@enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3 mb-3">@yield('form-button')</button>

    <script>
        function updateAnswers(){
            // answers dropdown
            console.log("Updating answers");
            var question_id = document.getElementById("condition_question_id").value;
            console.log("Question ID: " + question_id );
            if(question_id != null){
                getAnswersUsingAjax(question_id);
            }
        }

        function toggleConditionCard(){
            var display = document.getElementById("conditionCard").style.display;
            console.log("Display style: " + display);
            if (document.getElementById("conditionCard").style.display === "none") {
                $('#conditionCard').show();
                document.getElementById("conditionBtn").innerHTML = "<i class=\"fa fa-minus pr-2\"></i>Remove condition";
            } else {
                $('#conditionCard').hide();
                document.getElementById("conditionBtn").innerHTML = "<i class=\"fa fa-plus pr-2\"></i>Add condition";
            }
        }

        function fillAnswers(answers){
            console.log('Filling answers');

            $('#condition_answer_id').empty();
            $('#condition_answer_id').append('<option value={{null}}> Select an answer </option>');

            $.each(answers, function(key , value){
                $('#condition_answer_id').append("<option value=" + value.id + "> " + value.id + " - " + value.name_en + "</option>");
            });

        }

        function getAnswersUsingAjax(question_id) {
            console.log("Getting answers via an Ajax GET request");
            var url = "/api/questions/" + question_id;
            console.log(url);
            $.ajax({
                type: 'GET',
                url: url,
                cache: false,
                contentType: "json",
                success: function(data){
                    fillAnswers(data.data.answers);
                },
                error: function(data){
                    console.log(data);
                }
            });
        }

    </script>

        {{-- function fillQuestions(state){
            console.log('Filling questions');
            var oldQuestion = {!! json_encode(old('condition.condition_question_id')) !!};
            console.log("old: " + oldQuestion);
            if (state === false) {
                console.log('empty question');
                $('#condition_answer_id').empty();
                $('#condition_question_id').empty();
            }else {
                console.log('fill question');
                var questionList = {!! json_encode($questionList->toArray()) !!};

                $('#condition_question_id').empty();
                $('#condition_question_id').append('<option value={{null}}> select question </option>');
                $.each(questionList , function(key , value){
                    var select = (oldQuestion == value.id) ? ' selected="selected"':'';
                    $('#condition_question_id').append( "<option value=" + value.id + select + "> " + value.id + " - " + value.name_en + "</option>");
                });
            }
        } --}}
{{-- <!---- Fill answerDropdown ---->
<script>
    $(document).ready(function () {
        $(document).on('change',"#condition_question_id" , function() {
            console.log('on change');

            // var oldQuestion = {!! json_encode(old('condition.condition_question_id')) !!};
            // var oldAnswer = {!! json_encode(old('condition.condition_answer_id')) !!};
            // //fillAnswers();

            // console.log('question');
            // console.log(oldQuestion);
            // console.log('answer');
            // console.log(oldAnswer);


        //     console.log('nr');
        //     console.log(nr);
        //     console.log('answers');
        //     console.log(answers);
        //    fillAnswers(answers);
        });
        $("#condition_question_id").trigger("change");
        $("#conditionCard").mouseenter(function() {

            // var oldQuestion = {!! json_encode(old('condition.condition_question_id')) !!};
            // var oldAnswer = {!! json_encode(old('condition.condition_answer_id')) !!};
            // //fillAnswers();

            // console.log('question mouse');
            // console.log(oldQuestion);
            // console.log('answer mouse');
            // console.log(oldAnswer);
         });

        });

    // var oldQuestion = {!! json_encode(old('condition.condition_question_id')) !!};
    //         var oldAnswer = {!! json_encode(old('condition.condition_answer_id')) !!};
    //         //fillAnswers();

    //         console.log('question ready');
    //         console.log(oldQuestion);
    //         console.log('answer ready');
    //         console.log(oldAnswer);



    </script> --}}
@endsection


