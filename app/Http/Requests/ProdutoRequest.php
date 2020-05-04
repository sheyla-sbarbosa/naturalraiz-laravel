<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'valorProduto' => 'required',
            'estoqueProduto' => 'required',
            ''
        ];
    }

    public function messages()
    { 
        return [

        'nome.required' => 'O campo nome é obrigatório.',
        'valorProduto.required' => 'O campo Valor é obrigatório.',
        'estoqueProduto.required' => 'O campo Estoque é obrigatório.',
        'avaliacaoProduto.required' => 'O campo Avaliação é importante.',
        'descricaoProduto.required' => 'O campo Descrição é importante.',
        ];
    }
}

