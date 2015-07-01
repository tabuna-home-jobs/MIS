<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use Sentry;

class EncyCategoryRequest extends Request
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
            'id' => 'integer',
            'title' => 'required|max:255',
            'name' => 'required|max:255',
            'content' => 'required',
            'tag' => 'max:255',
            'descript' => 'max:255',
            'category' => 'required|integer|exists:encycategory,id'
        ];
    }
}
