<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Authenticatable
{
    use HasFactory;


    protected $table = "empresas";


    protected $fillable = [
        'razao_social',
        'email',
        'cnpj',
        'endereco',
        'contato',
        'senha'
    ];

    public function getAuthPassword()
    {
        return $this->senha;
    }
}
