<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use Sentry;

class EncyPostRequest extends Request
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
            'id' => 'integer|sometimes',
            'encycategory_id' => 'required|integer',
            'specdoctor' => 'required|integer',
            'title' => 'required|max:255',
            'name' => 'required|max:255',
            'tag' => 'max:255',
            'descript' => 'max:255',
            'avatar' => 'mimes:jpeg,bmp,png',
            'opisanie' => '',
            'history' => '',
            'lechenie' => '',
            'diagnostica' => '',
            'pol' => '',
        ];
    }
}
