<?php

namespace App\Policies;

use App\Models\Opiniao;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class OpiniaoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function editar($usuario, Opiniao $opiniao)
    {
        // Verifica se o usuário é administrador.

        // Usuario não é administrador e não pode editar opiniões.
        // if(!$usuario->ehAdmin()){
        //     return Response::deny('Apenas administradores podem editar opiniões!');
        // }

        // Usuario é administrador e pode editar opiniões.
        // if($usuario->ehAdmin()){
        //     return Response::allow();
        // }

        // Verifica se o usuário é o dono da opnião
        // if(!$opiniao->usuario->is($usuario)){
        //     return Response::deny('Você não pode editar esta opinião!');
        // }

        return Response::allow();
    }
}
