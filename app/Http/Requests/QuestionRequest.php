<?php

namespace App\Http\Requests;

use Sentry;

class QuestionRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Sentry::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fieldsAttr' => 'array|required',
            'quest' => 'max:255|required',
            'type' => 'required',
            'surveysID' => 'integer|required'
        ];
    }
}
