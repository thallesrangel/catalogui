<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:30|string',
            'description' => 'required|string',
            'category_id' => 'required|numeric',
            'subcategory_id' => 'required|numeric',
            'img_profile' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
            'img_card' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
            'email' => 'required|email',
            'whatsapp' => 'string|nullable',
            'tel' => 'required',
            'facebook' => 'string|nullable',
            'instagram' => 'string|nullable',
            'site' => 'string|nullable',
            'state_id' => 'required|numeric',
            'city_id' => 'required|numeric',
            'cep' => 'required',
            'district' => 'required',
            'street' => 'required',
            'complement' => 'string|nullable',
            'number' => 'required|numeric',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'numeric' => 'Campo deve ser números',
            'string' => 'Campo deve ser texto',
        ];
    }
}