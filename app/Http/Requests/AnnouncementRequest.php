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
            'img_profile' => 'required|image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
            'img_card' => 'required|image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
            'information' => 'string|nullable',
            'title_main_link' => 'nullable',
            'main_link' => 'nullable',
            'email' => 'required|email',
            'whatsapp' => 'string|nullable',
            'tel' => 'required',
            'facebook' => 'string|nullable',
            'instagram' => 'string|nullable',
            'site' => 'string|nullable',
            'state_id' => 'required',
            'city_id' => 'required',
            'cep' => 'string|nullable',
            'district' => 'string|nullable',
            'street' => 'string|nullable',
            'complement' => 'string|nullable',
            'number' => 'numeric|nullable',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'numeric' => 'Campo deve ser números',
            'string' => 'Campo deve ser texto',
            'dimensions' => 'Dimensões inválidas. Escolha outra imagem.',
            'mimes' => 'Não suporta o tipo de arquivo. Permitidos: jpg, png, jpeg.'
        ];
    }
}