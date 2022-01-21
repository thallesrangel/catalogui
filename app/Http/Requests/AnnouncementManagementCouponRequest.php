<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementManagementCouponRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'announcement_id' => 'required|numeric',
            'name' => 'required|max:30|string',
            'description' => 'max:100|string|nullable',
            'link' => 'max:150|string|nullable',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'numeric' => 'Campo deve ser números',
            'max' => 'Atingiu o número máximo de caracteres',
            'string' => 'Campo deve ser texto',
        ];
    }
}