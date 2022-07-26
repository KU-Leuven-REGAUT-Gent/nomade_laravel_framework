<?php

namespace App\Http\Controllers;

use App\QuestionnaireCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionnaireCategoryController extends Controller
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
        $this->authorize('index', QuestionnaireCategory::class);
        $questionnaireCategory = QuestionnaireCategory::all();

        return view('questionnaireCategory.index', compact('questionnaireCategory'));
    }

    public function show(QuestionnaireCategory $questionnaireCategory){
        $this->authorize('show', QuestionnaireCategory::class, $questionnaireCategory);


        return view('questionnaireCategory.show', compact('questionnaireCategory'));
    }

    public function create(){
        $this->authorize('create', QuestionnaireCategory::class);
        $questionnaireCategory = new QuestionnaireCategory();
        return view('questionnaireCategory.create', compact('questionnaireCategory'));
    }

    public function store(){
        $this->authorize('create', QuestionnaireCategory::class);
        $data = $this->validatedData();
        // Creating Questionnaire via mass assignment
        $questionnaireCategory = QuestionnaireCategory::create($data);
        //dd($questionnaireCategory);
        return redirect('/questionnaires/create');
    }

    public function edit(QuestionnaireCategory $questionnaireCategory){
        $this->authorize('edit', $questionnaireCategory);
        return view('questionnaireCategory.edit', compact('questionnaireCategory'));
    }

    public function update(QuestionnaireCategory $questionnaireCategory){
        $this->authorize('edit', $questionnaireCategory);
        $data = $this->validatedData();
        $questionnaireCategory->update($data);
        return redirect('/questionnaireCategories/'.$questionnaireCategory->id);
    }

    public function destroy(QuestionnaireCategory $questionnaireCategory){
        $this->authorize('delete', $questionnaireCategory);
        $questionnaireCategory->delete();
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
