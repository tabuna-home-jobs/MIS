<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use Sentry;

class SpecialRequest extends Request
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
            'fio' => 'max:255|required',

            'opyt' => 'max:255|required',

        ];
    }
}
