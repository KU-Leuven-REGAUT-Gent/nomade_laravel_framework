<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class Questionnaire extends Model
{
    public static function allQuestionnaires(){
        return app(Pipeline::class)
            ->send(Questionnaire::query())
            ->through([
                \App\QueryFilters\Active::class,
                \App\QueryFilters\MaxCount::class,
            ])
            ->thenReturn()
            ->get();
    }

    public function group()
    {
        return $this->belongsTo(QuestionnaireGroup::class,'questionnaire_group_id');
    }

    public function category()
    {
        return $this->belongsTo(QuestionnaireCategory::class,'questionnaire_category_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
