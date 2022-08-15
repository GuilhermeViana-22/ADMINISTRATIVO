<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    //informa a tabela que está sendo utilizada
    public $table = 'clientes';

    public function cliente(){
        return $this->belongsTo(SituacaoCliente::class, 'situacao_id', 'id' );
    }



    //valida os dados que estão vindo do formulario que esta vindo do formulalrio
    protected $fillable = [
        '_token',
        'nome_cliente',
        //email unico na tabela de cleintes
        'cpf_cliente',
        'rg_cliente',
        'email_cliente',
        'telefone_cliente',
        'cep_endereco',
        'rua_endereco',
        'bairro_endereco',
        'numero_endereco',
        'cidade_endereco',
        'estado_endereco',
        'complemento_endereco',
        'razao_social',
        'nome_fantasia',
        'cnpj_empresa',
        'email_empresa',
        'telefone_empresa',
        'observacoes',
        'cliente_iteracao_id',
        'situacao_id',
        'ativo',
    ];

    use HasFactory;


}
