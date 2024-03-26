<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Authorization logic can be defined here
    }

    public function rules()
    {
        return [
            'name_en' => 'required',
            'name_bn' => 'required',
            'order_no' => 'nullable',
        ];
    }
}
