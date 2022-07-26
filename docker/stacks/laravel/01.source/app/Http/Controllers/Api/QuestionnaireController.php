<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Questionnaire;
use App\Http\Resources\QuestionnaireResource;
use App\Repositories\QuestionnaireRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionnaireController extends Controller
{

    private $questionnaireRepository;

    public function __construct(QuestionnaireRepository $questionnaireRepository){
        $this->questionnaireRepository = $questionnaireRepository;
    }

    public function index(){
        $this->authorize('index', Questionnaire::class);
        //return $this->questionnaireRepository->all();
        return QuestionnaireResource::collection(Questionnaire::all());
        //return QuestionnaireResource::collection(Questionnaire::paginate());
    }

    public function show(Questionnaire $questionnaire){
        $this->authorize('show', $questionnaire);
        $questionnaire->load([
            'questions' => function($query) {
                $query->orderBy('sequence');
            },
            'questions.conditions',
            'questions.answers'  => function($query) {
                $query->orderBy('sequence');
            },
            'questions.answers.type',
            'questions.answers.option',
        ]);
        return new QuestionnaireResource($questionnaire);
    }

    public function store(){
        return response('Method Not Allowed', 405);
    }

    public function edit(Questionnaire $questionnaire){
        return response('Method Not Allowed', 405);
    }

    public function update(Questionnaire $questionnaire){
        return response('Method Not Allowed', 405);
    }

    public function destroy(Questionnaire $questionnaire){
        return response('Method Not Allowed', 405);
    }

    /*protected function validatedData(){
        return request()->validate([
            'name' => 'required|min:5',
            'notes' => '',
        ]);
    }*/













}
