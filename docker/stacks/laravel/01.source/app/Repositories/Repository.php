<?php

namespace App\Repositories;

class Repository
{
    /**
     * Get's a model by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($questionnaire_id)
    {
        return Questionnaire::find($questionnaire_id);
    }

    /**
     * Get's all models.
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
