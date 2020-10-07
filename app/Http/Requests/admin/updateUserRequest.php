<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class updateUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$this->id],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'هذا الحقل مطلوب',
            'name.string' =>'الاسم يجب ان يكون حروف وارقام',
            'name.max' =>'الحد الاقصي 255 حرف',
            'email.required' =>'هذا الحقل مطلوب',
            'email.string' =>'الايميل يجب ان يكون حروف وارقام',
            'email.max' =>'الحد الاقصي 255 حرف',
            'email.email' =>'الايميل غير صالح',
            'email.unique' =>'الايميل موجود لدينا بالقعل',
           /* 'password.required' =>'هذا الحقل مطلوب',
            'password.string' =>'الباسورد يجب ان يكون حروف وارقام',
            'password.min' =>'الحد الادني 8 حروف',
            'password.confirmed' =>'الباسورد غير متطابق',*/

        ];
    }
}
