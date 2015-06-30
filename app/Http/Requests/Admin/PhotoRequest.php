<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use Sentry;

class PhotoRequest extends Request
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
            'url' => 'required|mimes:jpeg,bmp,png',
            'album' => 'required|integer',
            'id' => 'sometimes|required',
        ];
    }
}
