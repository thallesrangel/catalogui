<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchAnnouncementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'category_id' => 'numeric|nullable',
            'subcategory_id' => 'numeric|nullable',
            'state_id' => 'string|nullable',
            'city_id' => 'string|nullable',
            'title' => 'string|nullable',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
        ];
    }
}