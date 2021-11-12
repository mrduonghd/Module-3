<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:accounts',
            'pwd' => 'min:6'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Khong duoc de trong',
            'email.required' => 'Khong duoc de trong',
            'email.email' => 'Email cua ban khong dung dinh dang',
            'email.unique' => 'Email cua ban da ton tai',
            'pwd.min' => 'Toi thieu 6 ki tu'
        ];
    }
}
