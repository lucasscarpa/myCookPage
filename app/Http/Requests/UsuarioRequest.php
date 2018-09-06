<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:255',
            'email' => 'required|unique:usuario',
            'senha' => 'required',
            'confirma_senha' => 'required|unique:usuario,senha',
            'endereco' => '',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'email.required'  => 'O campo email é obrigatório',
            'senha.required'  => 'Preencha os dois campos de senha',
            'confirma_senha.required'  => 'Preencha os dois campos de senha',
        ];
    }
}
