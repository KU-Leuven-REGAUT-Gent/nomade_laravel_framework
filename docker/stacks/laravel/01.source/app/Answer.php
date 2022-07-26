<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class Answer extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];



    public static function allAnswers(){
        return app(Pipeline::class)
            ->send(Answer::query())
            ->through([
                \App\QueryFilters\MaxCount::class,
            ])
            ->thenReturn()
            ->get();
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function type()
    {
        return $this->belongsTo(AnswerType::class,'answer_type_id');
    }

    public function option()
    {
        return $this->hasOne(AnswerOption::class);
    }

}
