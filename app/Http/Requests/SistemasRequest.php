<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SistemasRequest extends FormRequest
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
            //
            'nome_sistema' => 'required|string|max:250|min:3',
            'updated_at' => 'nullable',
            'created_at' => 'nullable'
        ];
    }
}
