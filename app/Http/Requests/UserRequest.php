<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest

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
            'nome' => 'required',
            'telefone1' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            'endereco1' => 'required',
            'cep1' => 'required',
            'numero1' => 'required',
        ];
    }
        public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'telefone1' => 'O campo telefone é obrigatório',
            'email.required' => 'O campo E-mail é obrigatório',
            'email.email' => 'O campo email não está no formato correto',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'O campo senha tem o mínimo de 6 caracteres',
            'password.confirmed' => 'O campo de confirmação tem que ser igual a senha.',
            'endereco1' => 'O campo endereço é obrigatório',
            'cep1' => 'o campo CEP é obrigatório', 
            'numero1' => 'o numero da sua casa é obrigatório'
        ];
    }
}
