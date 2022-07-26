<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Questionnaire;
use App\Question;
use App\Http\Resources\QuestionResource;
use App\Repositories\QuestionRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    private $questionRepository;

    public function __construct(QuestionRepository $questionRepository){
        $this->questionRepository = $questionRepository;
    }

    public function index(){
        $this->authorize('index', Questionnaire::class);
        return QuestionResource::collection(Question::all());
    }

    public function show(Question $question){
        $this->authorize('show', $question->questionnaire);
        $question->load([
            'conditions',
            'answers'  => function($query) {
                $query->orderBy('sequence');
            },
            'answers.type',
            'answers.option',
        ]);
        return new QuestionResource($question);
    }

    public function store(){
        return response('Method Not Allowed', 405);
    }

    public function edit(Question $question){
        return response('Method Not Allowed', 405);
    }

    public function update(Question $question){
        return response('Method Not Allowed', 405);
    }

    public function destroy(Question $question){
        return response('Method Not Allowed', 405);
    }
}
