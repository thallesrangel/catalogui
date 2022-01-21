<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:30|string',
            'email' => 'required|email', 
            'document' => 'required|string', 
            'password' => 'required|max:30',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'password.max' => 'Tamanho máximo de 30 caracteres',
        ];
    }
}