<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class Question extends Model
{

    public static function allQuestions(){
        return app(Pipeline::class)
            ->send(Question::query())
            ->through([
                \App\QueryFilters\MaxCount::class,
            ])
            ->thenReturn()
            ->get();
    }


    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function type()
    {
        return $this->belongsTo(QuestionType::class,'question_type_id');
    }

    public function conditions()
    {
        return $this->hasMany(QuestionCondition::class);
    }
}
