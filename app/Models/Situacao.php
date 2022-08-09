<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Situacao extends Model
{
    public $table = 'situacao';

    use HasFactory;

    public function cliente(){
        return $this->hasMany(Cliente::class, 'situacao_id', 'id');
    }
}
