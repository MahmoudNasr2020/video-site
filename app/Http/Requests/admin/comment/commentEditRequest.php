<?php

namespace App\Http\Requests\admin\comment;

use Illuminate\Foundation\Http\FormRequest;

class commentEditRequest extends FormRequest
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
            'commentEdit' => ['required'],
        ];
    }

    public function messages()
    {
        return [

            'commentEdit.required' =>'هذا الحقل مطلوب',

        ];
    }
}
