<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use App\Question;
use App\QuestionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Questionnaire $questionnaire){
        $this->authorize('index', $questionnaire);
        $questions = Question::all();
        dd($questions);
        return view('question.index', compact('questionnaire','questions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Questionnaire $questionnaire, Question $question){
        $this->authorize('show', $questionnaire);
        $question->load('type','conditions');

        dd($question);
        return view('question.show', compact('questionnaire','question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Questionnaire $questionnaire){
        $this->authorize('create', $questionnaire);
        $questionTypes = QuestionType::all();
        $question = new Question();
        $question->type = new QuestionType();
        $question->type->id = 1;
        $questionList = $questionnaire->questions()->get()->load('answers');

        $condition['question_id'] = null;
        $condition['answer_id'] = null;

        return view('question.create', compact('questionnaire','question','questionTypes','questionList','condition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Questionnaire $questionnaire)
    {
        $this->authorize('create', $questionnaire);

        // dd(request());
        $data = $this->validatedData();
        $condition =  $data['condition'];

        unset($data['condition']);
        $data['sequence'] = $questionnaire->questions->max('sequence') + 1;
        $data['created_by'] = Auth::user()->id;
        $data['updated_by'] = Auth::user()->id;
        $question = $questionnaire->questions()->create($data);
        if($condition['condition_question_id'] != null){
            $question->conditions()->create($condition);
        }
        return $this->redirect($questionnaire, $question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionnaire $questionnaire, Question $question)
    {
        $this->authorize('edit', $questionnaire);
        $questionTypes = QuestionType::all();
        $question->load('conditions');
        $questionList= $questionnaire->questions()->where('sequence','<',$question->sequence)->get()->load('answers');
        if($question->conditions->isNotEmpty()){
            $condition['question_id'] = $question->conditions->first()->condition_question_id;
            $condition['answer_id'] = $question->conditions->first()->condition_answer_id;
        }else{
            $condition['question_id'] = null;
            $condition['answer_id'] = null;
        }
        return view('question.edit', compact('questionnaire','question','questionTypes','questionList','condition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Questionnaire $questionnaire, Question $question)
    {
        $this->authorize('edit', $questionnaire);
        $data = $this->validatedData();
        $data['updated_by'] = Auth::user()->id;

        // Temporary fix for single condition
        $conditions[] = $data['condition'];
        unset($data['condition']);

        $question->update($data);

        if($conditions[0]['condition_question_id'] != null){
             $question->conditions()->createMany($conditions);
        }
        return $this->redirect($questionnaire, $question);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $question
     * @return \Illuminate\Http\Response
     */
    public function up(Questionnaire $questionnaire, Question $question)
    {
        return $this->arrange($questionnaire,$question,-1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $question
     * @return \Illuminate\Http\Response
     */
    public function down(Questionnaire $questionnaire, Question $question)
    {
        return $this->arrange($questionnaire,$question,1);
    }

    public function arrange(Questionnaire $questionnaire, Question $question, $direction)
    {
        $this->authorize('arrange', $questionnaire);
        $max = $questionnaire->questions->max('sequence');
        $sequence = $question['sequence'];
        $result = $sequence + $direction;
        if(0 < $result && $result <= $max){
            $target = $questionnaire->questions->where('sequence', $result)->first();
            $question['sequence'] = $result;
            $target['sequence'] = $sequence;
            $question->save();
            $target->save();
        }else{
            return response('Server error', 500);
        }        
        return $this->redirect($questionnaire, $question);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function duplicate(Questionnaire $questionnaire, Question $question)
    {
        $this->authorize('duplicate', $questionnaire);
        $question->load('answers','conditions');
        $new_question = $question->replicate();
        $new_question['sequence'] = $questionnaire->questions->max('sequence') + 1;
        $new_question['created_by'] = Auth::user()->id;
        $new_question['updated_by'] = Auth::user()->id;
        $new_question->push();
        foreach($question->getRelations() as $relation => $items){
            foreach($items as $item){
                unset($item->id);
                $new_question->{$relation}()->create($item->toArray());
            }
        }
        return $this->redirect($questionnaire);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionnaire $questionnaire, Question $question)
    {
        $this->authorize('delete', $questionnaire);
        $question->delete();
        return redirect('/questionnaires/'.$questionnaire->id);
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
            'name_en' => 'required|min:7',
            'name_fr' => '',
            'name_nl' => '',
            'description_en' => '',
            'description_fr' => '',
            'description_nl' => '',
            'question_type_id' => 'required',
            'condition.*' => 'sometimes',
            'condition.condition_question_id' => 'sometimes',
            'condition.condition_answer_id' => 'sometimes|required_unless:condition.condition_question_id,',
        ]);
    }
}
