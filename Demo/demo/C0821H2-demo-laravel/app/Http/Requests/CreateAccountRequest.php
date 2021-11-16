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
            'username' => 'required',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'min:6',
            'cfm-password' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Khong duoc de trong',
            'email.required' => 'Khong duoc de trong',
            'email.email' => 'Email cua ban khong dung dinh dang',
            'email.unique' => 'Email cua ban da ton tai',
            'password.min' => 'Toi thieu 6 ki tu',
            'cfm-password.same' => 'Mat khau xac nhan khong dung' 
        ];
    }
}
