<?php

namespace App\Http\Requests\admin\tag;

use Illuminate\Foundation\Http\FormRequest;

class tagRequest extends FormRequest
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
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'هذا الحقل مطلوب',
            'name.string' =>'الاسم يجب ان يكون حروف وارقام',
            'name.max' =>'الحد الاقصي 255 حرف',

        ];
    }
}
