<?php

namespace App\Http\Controllers;

use App\Answer;
use App\AnswerType;
use App\Questionnaire;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // $this->authorize('index', Answer::class);
        $answers = Answer::allAnswers();
        return view('answer.index', compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Questionnaire $questionnaire, Question $question)
    {
        $this->authorize('create', $questionnaire);
        $answer_types = AnswerType::all();
        $answer = new Answer();
        $answer->type = new AnswerType();
        $answer->type->id = 1;
        return view('answer.create', compact('questionnaire','question','answer','answer_types'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Questionnaire $questionnaire, Question $question, Request $request)
    {
        $this->authorize('create', $questionnaire);
        $data = $this->validatedData();

        $optionData= $data['option'];
        unset($data['option']);



        $data['sequence'] = $question->answers->max('sequence') + 1;
        $data['created_by'] = Auth::user()->id;
        $answer = $question->answers()->create($data);

        // set default min/max for scale en y/n answers
        if ($answer->answer_type_id ==25){ // y/n answer
            $optionData['min']=0;
            $optionData['max']=1;
        }
        if ($answer->answer_type_id ==20){ // scale answer

            if ($optionData['min'] == null) {$optionData['min'] =0;}
            if ($optionData['max'] == null){$optionData['max'] =10;}
        }

        // create answer option
        if ($optionData['min'] != null || $optionData['max'] != null){
            $option = $answer->option()->create($optionData);
        }

        return $this->redirect($questionnaire,$question,$answer);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Questionnaire $questionnaire, Question $question, Answer $answer){
        $this->authorize('show', $questionnaire);
        $answer->load('type');
        return view('answer.show', compact('questionnaire','question','answer'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionnaire $questionnaire, Question $question, Answer $answer)
    {
        $this->authorize('edit', $questionnaire);
        $answer_types = AnswerType::all();
        $answer->load('option');
        return view('answer.edit', compact('questionnaire','question','answer','answer_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Questionnaire $questionnaire, Question $question, Answer $answer)
    {
        $this->authorize('edit', $questionnaire);

        $data = $this->validatedData();

        $optionData= $data['option'];
        unset($data['option']);

        $data['updated_by'] = Auth::user()->id;
        $answer->update($data);
        unset($data);

        // set default min/max for scale en y/n answers
        if ($answer->answer_type_id ==25){ // y/n answer
            $optionData['min']=0;
            $optionData['max']=1;
        }
        if ($answer->answer_type_id ==20){ // scale answer

            if ($optionData['min'] == null) {$optionData['min'] =0;}
            if ($optionData['max'] == null){$optionData['max'] =10;}
        }

        // answer option
        if ($optionData['min'] != null || $optionData['max'] != null){

            if ($answer->option()->exists()){
                $option= $answer->option()->update($optionData);
            }else{
                $option= $answer->option()->create($optionData);
            }

        }

        return $this->redirect($questionnaire,$question,$answer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $question
     * @return \Illuminate\Http\Response
     */
    public function up(Questionnaire $questionnaire, Question $question, Answer $answer)
    {
        return $this->arrange($questionnaire,$question,$answer,-1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $question
     * @return \Illuminate\Http\Response
     */
    public function down(Questionnaire $questionnaire, Question $question, Answer $answer)
    {
        return $this->arrange($questionnaire,$question,$answer,1);
    }

    public function arrange(Questionnaire $questionnaire, Question $question, Answer $answer, $direction)
    {
        $this->authorize('arrange', $questionnaire);
        $max = $question->answers->max('sequence');
        $sequence = $answer['sequence'];
        $result = $sequence + $direction;
        if(0 < $result && $result <= $max){
            $target = $question->answers->where('sequence', $result)->first();
            $answer['sequence'] = $result;
            $target['sequence'] = $sequence;
            $answer->save();
            $target->save();
        }else{
            return response('Server error', 500);
        }
        return $this->redirect($questionnaire,$question);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionnaire $questionnaire, Question $question, Answer $answer)
    {
        $this->authorize('delete', $questionnaire);
        $answer->delete();
        return $this->redirect($questionnaire,$question);
    }

    protected function redirect(Questionnaire $questionnaire, Question $question = null, Answer $answer = null){
        /*if($answer != null){
            return redirect('/questionnaires/'.$questionnaire->id.'#answer_'.$answer->id);
        }else*/ if($question != null){            
            return redirect('/questionnaires/'.$questionnaire->id.'#question_'.$question->id);
        }else{
            return redirect('/questionnaires/'.$questionnaire->id);
        }
    }

    protected function validatedData(){
        return request()->validate([
            'answer_type_id' => '',
            'name_en' => 'required',
            'name_fr' => '',
            'name_nl' => '',
            'description_en' => '',
            'description_fr' => '',
            'description_nl' => '',
            'option.min' => 'numeric|nullable',
            'option.max' => 'numeric|nullable',
        ]);
    }
}
