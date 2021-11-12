<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
            'date' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Khong duoc de trong',
            'content.required' => 'Khong duoc de trong',
            'date.required' => 'Khong duoc de trong', 
        ];
    }
}
