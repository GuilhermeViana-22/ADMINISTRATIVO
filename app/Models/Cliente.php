<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //timestamps
    public $timestamps = false;
    //informa a tabela que está sendo utilizada
    public $table = 'clientes';
    //valida os dados que estão vindo do formulario que esta vindo do formulalrio
    protected $fillable = [
        '_token',
        'nome',
        'email',
        'data_cadastro',
        'cpf',
        'rg',
        'cep',
        'cidade',
        'bairro_logradouro',
        'complemento',
        'observacoes',
        'cliente_iteracao_id',
        'situacao_id',
        'nome_sistema',
        'ativo',
    ];

    use HasFactory;
    
        
}
