<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTag extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:tags,name|max:50'
        ];
    }

    /**
     * Get the error messages for the defined validation rules
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'A tag name is required',
            'name.unique' => 'This tag already exists',
            'name.max' => 'Name is too long'
        ];
    }
}
