<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email:rfc,dns',
            'password' => 'min:6'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Khong duoc de trong',
            'email.email' => 'Khong dung dinh dang',
            'password.min' => 'Mat khau toi thieu 6 ki tu'
        ];
    }
}
