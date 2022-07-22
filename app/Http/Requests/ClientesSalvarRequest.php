<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesSalvarRequest extends FormRequest
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

            'nome_cliente' => 'required|string|max:255|min:3',
            // //email unico na tabela de cleintes
            // 'cpf_cliente' => 'required',
            // 'rg_cliente' => 'required',
            // 'email_cliente' => 'required|email|unique:clientes',
            // 'telefone_cliente' => 'required',
            // 'cep_endereco' => 'required',
            // 'rua_endereco' => 'required',
            // 'bairro_endereco' => 'required',
            // 'numero_endereco' => 'required',
            // 'cidade_endereco' => 'required',
            // 'estado_endereco' => 'required',
            // 'complemento_endereco' => 'nullable',
            // 'razao_social' => 'nullable',
            // 'nome_fantasia' => 'nullable',
            // 'cnpj_empresa' => 'nullable',
            // 'email_empresa' => 'nullable',
            // 'telefone_empresa' => 'nullable',
            // 'observacoes' => 'nullable',
        ];
    }
}
