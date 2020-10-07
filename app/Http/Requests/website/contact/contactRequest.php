<?php

namespace App\Http\Requests\website\contact;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
            'name'=>['required','string'],
            'email'=>['required','email'],
            'message'=>['required','string']
        ];
    }

    public function messages()
    {
         return [
            'name.required'=>'هذا الحقل مطلوب',
            'email.required'=>'هذا الحقل مطلوب',
            'email.email'=>'الايميل غير صالح',
            'message.required'=>'هذا الحقل مطلوب'
         ];
    }
}
