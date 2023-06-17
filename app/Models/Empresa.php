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

    public function opnioes()
    {
        return $this->hasMany(Opiniao::class, 'empresa_id');
    }

    public function opnioes_negativas()
    {
        return $this->opnioes()->where('tipo', '2');
    }

    public function opnioes_positivas()
    {
        return $this->opnioes()->where('tipo', '1');
    }

    public function getTotalOpnioesPositivasAttribute()
    {
        return $this->opnioes_positivas->count();
    }

    public function getTotalOpnioesNegativasAttribute()
    {
        return $this->opnioes_negativas->count();
    }

    public function getTipoUsuarioAttribute()
    {
        return 'empresa';
    }
}
