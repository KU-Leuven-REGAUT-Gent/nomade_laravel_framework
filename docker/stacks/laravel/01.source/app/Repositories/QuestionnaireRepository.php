<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Questionnaire;

class QuestionnaireRepository
{
    /**
     * Get's a questionnaire by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($questionnaire_id)
    {
        return Questionnaire::find($questionnaire_id);
    }

    /**
     * Get's all questionnaires.
     *
     * @return mixed
     */
    public function all()
    {
        return Questionnaire::all();
    }

    /**
     * Deletes a questionnaire.
     *
     * @param int
     */
    public function delete($questionnaire_id)
    {
        Questionnaire::destroy($questionnaire_id);
    }

    /**
     * Updates a questionnaire.
     *
     * @param int
     * @param array
     */
    public function update($questionnaire_id, array $questionnaire_data)
    {
        Questionnaire::find($questionnaire_id)->update($questionnaire_data);
    }
}
