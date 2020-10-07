<?php

namespace App\Http\Requests\website\profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class settingRequest extends FormRequest
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
            'name'=>['required'],
            'email'=>['required','email','unique:users,email,'.$this->id],
            'password'=>['nullable','confirmed','min:8'],
            'image'=>['nullable','image'],
            'bio'=>['required']
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'هذا الحقل مطلوب',
            'email.required'=>'هذا الحقل مطلوب',
            'email.unique'=>'الايميل مسجل لدينا بالفعل',
            'password.confirmed'=>'الباسورد غير متطابق',
            'password.min'=>'الحد الادني للباسورد 8 حروف',
            'image.image'=>'الصورة غير صالحة',
            'bio'=>'هذا الحقل مطلوب',

        ];
    }
}
