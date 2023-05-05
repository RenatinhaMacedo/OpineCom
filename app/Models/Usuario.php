<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "usuarios";

    protected $fillable = [
        'nome',
        'documento',
        'telefone',
        'email',
        'senha'
    ];

    protected $hidden = [
        'remember_token',
        'senha'
    ];

    public function getAuthPassword()
    {
        return $this->senha;
    }

    public function opinioes()
    {
        return $this->hasMany(Opiniao::class);
    }
}
