<?php

namespace App\Http\Requests\admin\video;

use Illuminate\Foundation\Http\FormRequest;

class videoEditRequest extends FormRequest
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
            'url' => ['required', 'url'],
            'desc' => ['required', 'string'],
            'status' => ['required'],
            'tags' => ['required'],
            'muslim_id' => ['required'],
            'cat_id' => ['required'],
            'image' => ['nullable','image'],
            'meta_key' => [ 'string','max:191'],
            'meta_desc' => [ 'string','max:191'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'هذا الحقل مطلوب',
            'name.string' =>'الاسم يجب ان يكون حروف وارقام',
            'url.required' =>'هذا الحقل مطلوب',
            'url.url' =>'الحقل يجب ان يكون لينك',
            'name.max' =>'الحد الاقصي 255 حرف',
            'desc.required' =>'هذا الحقل مطلوب',
            'desc.string' =>'الوصف يجب ان يكون حروف وارقام',
            'tags.required' =>'هذا الحقل مطلوب',
            'status.required' =>'هذا الحقل مطلوب',
            'muslim_id.required'=>'هذا الحقل مطلوب',
            'cat_id.required'=>'هذا الحقل مطلوب',
            //'image.required'=>'هذا الحقل مطلوب',
            'image.image'=>'امتداد الصورة غير صالح',
            'meta_key.string' =>'مفتاح محرك البحث يجب ان يكون حروف وارقام',
            'meta_key.max' =>'الحد الاقصي 255 حرف',
            'meta_desc.string' =>'وصف محرك البحث يجب ان يكون حروف وارقام',
            'meta_desc.max' =>'الحد الاقصي 255 حرف',

        ];
    }
}
