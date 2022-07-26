<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class SubmissionAnswer extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
