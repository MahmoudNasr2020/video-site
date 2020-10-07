<?php

namespace App\Http\Requests\admin\page;

use Illuminate\Foundation\Http\FormRequest;

class pageRequest extends FormRequest
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
            'desc' => ['required', 'string'],
            'meta_key' => [ 'string','max:191'],
            'meta_desc' => [ 'string','max:191'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'هذا الحقل مطلوب',
            'name.string' =>'الاسم يجب ان يكون حروف وارقام',
            'name.max' =>'الحد الاقصي 255 حرف',
            'desc.required' =>'هذا الحقل مطلوب',
            'desc.string' =>'الوصف يجب ان يكون حروف وارقام',
            'meta_key.string' =>'مفتاح محرك البحث يجب ان يكون حروف وارقام',
            'meta_key.max' =>'الحد الاقصي 255 حرف',
            'meta_desc.string' =>'وصف محرك البحث يجب ان يكون حروف وارقام',
            'meta_desc.max' =>'الحد الاقصي 255 حرف',

        ];
    }
}
