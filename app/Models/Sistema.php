<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    public $table = 'sistema';
    use HasFactory;

    public function sistema(){
        return $this->belongsTo(Situacao::class, 'id', 'id' );
    }

    protected $fillable = [
        'ativo',
        'updated_at'
    ];

}
