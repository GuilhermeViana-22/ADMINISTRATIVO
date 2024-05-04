<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursosSalvarRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'capa' => 'nullable', // Validando a imagem
            'titulo' => 'required|string',
            'descricao' => 'required|string',
            'instrutor_id' => 'required|integer',
        ];
    }
}
