<?php namespace App\Http\Requests;

class CommentsRequest extends Request
{

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
            'id' => 'integer',
            'fio' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required',
            'content' => 'required',
            'status' => 'required|boolean'
        ];
    }
}
