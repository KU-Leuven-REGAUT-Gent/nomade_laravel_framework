<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index(Request $request){
        $this->authorize('index', Submission::class);
        $submissions = Submission::all();
        // dd($submissions[1]);
        return view('submission.index', compact('submissions'));
    }

    public function show(Submission $submission){
        $this->authorize('show', $submission);
        // Method 1 is using $setup_id as input variable
        //$setup = Setup::findOrFail($setup_id);
        return view('submission.show', compact('submission'));
    }

    public function export(Questionnaire $questionnaire){
        
        $this->authorize('edit', $questionnaire);
        dd($questionnaire->load('questions','questions.answers')->questions);
        return redirect('/questionnaires/'.$questionnaire->id);
    }
}
