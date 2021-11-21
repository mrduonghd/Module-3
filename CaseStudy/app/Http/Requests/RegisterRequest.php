<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'firstName' => 'required',
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'min:6',
            'cfm-password' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'firstName.required' => 'Dien First Name cua ban',
            'name.required' => 'Dien Ten cua ban',
            'email.required' => 'Dien Email cua ban',
            'email.email' => 'Email khong dung dinh dang',
            'email.unique' => 'Email da ton tai',
            'password.min' => 'Mat khau toi thieu 6 ki tu',
            'cfm-password.same' => 'Mat khau xac nhan khong dung'
        ];
    }
}
