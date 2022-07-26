<?php

namespace App;

use Illuminate\Pipeline\Pipeline;

class Submission extends Model
{
    protected $dates = ["started_at","finished_at"];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function deletor()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function answers()
    {
        return $this->hasMany(SubmissionAnswer::class);
    }
}
