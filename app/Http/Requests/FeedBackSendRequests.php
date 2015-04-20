<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class FeedBackSend extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'contentmess' => 'required',
            'email' => 'required|max:255|email',
            'theme' => 'required|max:255',
		];
	}

}
