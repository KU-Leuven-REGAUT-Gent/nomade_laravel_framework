<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use App\QuestionnaireCategory;
use App\QuestionnaireGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionnaireController extends Controller
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
        $this->authorize('index', Questionnaire::class);
        $questionnaires = Questionnaire::allQuestionnaires()->sortBy('name_en');
        $questionnaires->load('category', 'group');


        if($request->query('sort')=='category'){
            $groupByPar = 'category';
        }else{
            $groupByPar = 'group';
        }
        $questionnairesGroup = $questionnaires->groupBy('questionnaire_' . $groupByPar . '_id');
        return view('questionnaire.index', compact('questionnairesGroup','groupByPar'));
    }

    public function show(Questionnaire $questionnaire){
        $this->authorize('show', Questionnaire::class, $questionnaire);
        //Lazy loading relationships
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
        $questionnaire->load('category','group');
        $query = Request()->query;
        $anchor = 'questionnaires/'.$questionnaire->id.'/questions/'.$query->get('question');
        return view('questionnaire.show', compact('questionnaire','anchor'));
    }

    public function create(){
        $this->authorize('create', Questionnaire::class);
        $questionnaire = new Questionnaire();
        $questionnaireCategories= QuestionnaireCategory::all();
        $questionnaireGroups= QuestionnaireGroup::all();
        //dd($questionnaireGroups[53]);
        return view('questionnaire.create', compact('questionnaire','questionnaireCategories','questionnaireGroups'));
    }

    public function store(){
        $this->authorize('create', Questionnaire::class);
        $data = $this->validatedData();
        $data['questionnaire_group_id'] = 1;
        $data['created_by'] = Auth::user()->id;
        // Creating Questionnaire via mass assignment
        //dd($data);
        $questionnaire = Questionnaire::create($data);
        return redirect('/questionnaires/'.$questionnaire->id);
    }

    public function edit(Questionnaire $questionnaire){
        $this->authorize('edit', $questionnaire);
        $questionnaireCategories= QuestionnaireCategory::all();
        $questionnaireGroups= QuestionnaireGroup::all();
        $questionnaire->load('category','group');
        return view('questionnaire.edit', compact('questionnaire','questionnaireCategories','questionnaireGroups'));
    }

    public function update(Questionnaire $questionnaire){
        $this->authorize('edit', $questionnaire);
        $data = $this->validatedData();
        $data['updated_by'] = Auth::user()->id;
        $questionnaire->update($data);
        return redirect('/questionnaires/'.$questionnaire->id);
    }



    public function destroy(Questionnaire $questionnaire){
        $this->authorize('delete', $questionnaire);
        $questionnaire->delete();
        return redirect('/questionnaires');
    }

    protected function validatedData(){
        return request()->validate([
            'name_en' => 'required',
            'name_fr' => '',
            'name_nl' => '',
            'description_en' => '',
            'description_fr' => '',
            'description_nl' => '',
            "questionnaire_category_id" => '',
            "questionnaire_group_id" => '',
        ]);
    }













}
