<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginCreateRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|string',
            'sobrenome' => 'required|string',
            'cpf' => 'required|string',
            'country' => 'required|string',
            'telefone' => 'required|string',
            'data_nascimento' => 'required|date',
            'cep' => 'required|string',
            'rua' => 'required|string',
            'bairro' => 'required|string',
            'cidade' => 'required|string',
            'estado' => 'required|string',
            'uf' => 'required|string',
            'numero' => 'required|integer',
            'complemento' => 'string',
            'email' => 'required|email',
            'senha' => 'required|string',

        ];
    }
}
