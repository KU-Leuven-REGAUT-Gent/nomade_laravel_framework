<?php

namespace App\Http\Controllers;

use App\QuestionnaireGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionnaireGroupController extends Controller
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

    public function index(Request $request){
        $this->authorize('index', QuestionnaireGroup::class);
        $questionnaireGroup = QuestionnaireGroup::all();

        return view('questionnaireGroup.index', compact('questionnaireGroup'));
    }

    public function show(QuestionnaireGroup $questionnaireGroup){
        $this->authorize('view', QuestionnaireGroup::class, $questionnaireGroup);


        return view('questionnaireGroup.show', compact('questionnaireGroup'));
    }

    public function create(){
        $this->authorize('create', QuestionnaireGroup::class);
        $questionnaireGroup = new QuestionnaireGroup();
        return view('questionnaireGroup.create', compact('questionnaireGroup'));
    }

    public function store(){
        $this->authorize('create', QuestionnaireGroup::class);
        $data = $this->validatedData();
        // Creating Questionnaire via mass assignment
        $questionnaireGroup = QuestionnaireGroup::create($data);
        return redirect('/questionnaires/create');
    }

    public function edit(QuestionnaireGroup $questionnaireGroup){
        $this->authorize('edit', $questionnaireGroup);
        return view('questionnaireGroup.edit', compact('QuestionnaireGroup'));
    }

    public function update(QuestionnaireGroup $questionnaireGroup){
        $this->authorize('edit', $QuestionnaireGroup);
        $data = $this->validatedData();
        $questionnaireGroup->update($data);
        return redirect('/questionnaireGroup/'.$questionnaireGroup->id);
    }

    public function destroy(QuestionnaireGroup $questionnaireGroup){
        $this->authorize('delete', $questionnaireGroup);
        $questionnaireGroup->delete();
        return redirect('/questionnaires');
    }

    protected function validatedData(){
        return request()->validate([
            'name_en' => 'required',
            'name_fr' => '',
            'name_nl' => '',
            'description_en' => 'required',
            'description_fr' => '',
            'description_nl' => '',
        ]);
    }













}
