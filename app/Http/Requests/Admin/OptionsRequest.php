<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use Sentry;

class OptionsRequest extends Request
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
            'id' => 'integer|',
            'module' => 'required|max:255',
            'value' => 'required|max:255',
        ];
    }
}
