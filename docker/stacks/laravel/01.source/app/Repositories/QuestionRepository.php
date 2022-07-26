<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Question;

class QuestionRepository
{
    /**
     * Get's a questionnaire by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($question_id)
    {
        return Question::find($question_id);
    }

    /**
     * Get's all questionnaires.
     *
     * @return mixed
     */
    public function all()
    {
        return Question::all();
    }

    /**
     * Deletes a questionnaire.
     *
     * @param int
     */
    public function delete($question_id)
    {
        Question::destroy($question_id);
    }

    /**
     * Updates a questionnaire.
     *
     * @param int
     * @param array
     */
    public function update($questionnaire_id, array $questionnaire_data)
    {
        Question::find($questionnaire_id)->update($questionnaire_data);
    }
}
