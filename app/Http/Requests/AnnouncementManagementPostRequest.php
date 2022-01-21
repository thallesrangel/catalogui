<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementManagementPostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'announcement_id' => 'required|numeric',
            'img_post' => 'required|image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
            'title' => 'max:30|string|nullable',
            'value' => 'max:30|string|nullable',
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