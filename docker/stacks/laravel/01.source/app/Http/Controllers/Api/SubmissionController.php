<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Submission;
use App\Http\Resources\SubmissionResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    public function index(){
        $this->authorize('index', Submission::class);
        //return $this->submissionRepository->all();
        //return SubmissionResource::collection(Submission::paginate());
        return SubmissionResource::collection(Submission::with('questionnaire')->get());
    }

    public function show(Submission $submission){
        $this->authorize('show', $submission);
        //$submission->load('questions.conditions','questions.answers.type', 'questions.answers.option');
        $submission->load([
                            'questionnaire.questions' => function($query) {
                                $query->orderBy('sequence');
                            },
                            'questionnaire.questions.answers',
                            'answers',
                        ]);
        return new SubmissionResource($submission);
    }

    public function store(){
        $this->authorize('create', Submission::class);
        $data = $this->validatedData()['data'];
        $answers = $data['answers'];
        unset($data['answers']);
        $submission = Submission::create($data);
        $submission->answers()->createMany($answers);
        $submission->load('questionnaire.questions.answers','answers');
        if(array_key_exists('prev_submission_id', $data) && $data['prev_submission_id'] != null){
            Submission::find($data['prev_submission_id'])->update([
                'updated_by' => $data['created_by'],
                'next_submission_id' => $submission->id,
            ]);
        }
        return new SubmissionResource($submission);
    }

    public function update(Submission $submission){
        $this->authorize('create', Submission::class);
        return response('Method Not Allowed', 405);
    }

    public function destroy(Submission $submission){
        $this->authorize('destroy', $submission);
        // Updating the deleted_by field without changing the updated_at
        $submission->deleted_by = Auth::user()->id;
        $submission->timestamps = false;
        $submission->save();
        $submission->delete();
    }

    protected function validatedData(){
        return request()->validate([
            'data.questionnaire_id' => 'required|numeric|min:1',
            'data.user_id' => 'required|numeric|min:1',
            'data.answers' => 'required',
            'data.created_by' => 'required|numeric|min:1',
            'data.started_at' => 'date_format:Y-m-d H:i:s.v',   // VALIDATION FAILS ON TIMESTAMP -> RETURNS 302 ???
            'data.finished_at' => 'date_format:Y-m-d H:i:s.v',  // VALIDATION FAILS ON TIMESTAMP -> RETURNS 302 ???
            'data.prev_submission_id' => 'nullable|numeric|min:1',
            'data.next_submission_id' => 'nullable|numeric|min:1',
        ]);
    }













}
