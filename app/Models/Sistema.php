<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    use HasFactory;

    public function sistema(){
        return $this->belongsTo(Situacao::class, 'situacao_id', 'id' );
    }

    //campos esperados na model
    protected $fillable = [
        'nome_sistema',
        'url',
        'rota_api',
        'qtd_usuarios',
        'situacao_id',
        'token',
        'ativo',
        'updated_at',
        'created_at'
    ];
}
