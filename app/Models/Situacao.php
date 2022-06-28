<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Situacao extends Model
{
    use HasFactory;
}

// public function user() {
//     return $this->belongsTo('App\Models\User');
// }

// public function users() {
//     return $this->belongsToMany('App\Models\User');
// }
