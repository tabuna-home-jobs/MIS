<?php namespace App\Http\Requests;

use Sentry;

class AuthLoginRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !Sentry::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => 'required|max:255',
            'password' => 'required|min:6',
        ];
    }
}
