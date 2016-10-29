<?php namespace App\Http\Requests;

class SubGoodsRequest extends Request
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
            'name' => 'required|max:255',
            'avatar' => 'mimes:jpeg,bmp,png',
            'price' => 'integer',
            'parent_good_id' => 'integer'
        ];
    }
}
