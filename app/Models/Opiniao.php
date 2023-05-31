<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opiniao extends Model
{
    use HasFactory;

    // Indica o nome da tabela do banco de dados
    protected $table = "opinioes";

    // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        'titulo',
        'nome',
        'empresa',
        'produto',
        'avaliacao',
        'data',
        'imagem'
    ];

    public function usuario()
    {
        // Indica que um Opiniao pertence a um usuário
        return $this->belongsTo(Usuario::class);
    }
}
