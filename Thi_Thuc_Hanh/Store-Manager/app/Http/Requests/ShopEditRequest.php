<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopEditRequest extends FormRequest
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
            'phone' => 'required|numeric',
            'email' => 'required|email:rfc,dns',
            'address' => 'required',
            'manager_name' => 'required',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được để trống',
            'phone.required' => 'Không được để trống',
            'email.required' => 'Không được để trống',
            'address.required' => 'Không được để trống',
            'manager_name.required' => 'Không được để trống',
            'status.required' => 'Không được để trống',
            'phone.numeric' => 'Phải là số',
            'email.email' => 'Email không đúng định dạng',
        ];
    }
}
