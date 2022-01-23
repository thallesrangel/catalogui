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
            'email' => 'required|email|unique:user', 
            'document' => 'required|string|max:14|unique:user', 
            'password' => 'required|string|max:30',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'password.max' => 'Tamanho máximo de 30 caracteres',
            'document.unique' => 'CPF/CNPJ já registrado',
            'email.unique' => 'Email já registrado',
        ];
    }
}