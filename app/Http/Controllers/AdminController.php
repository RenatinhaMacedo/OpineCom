<?php

namespace App\Http\Controllers;

use App\Models\Opiniao;
use App\Models\Empresa;
use App\Models\Usuario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Admin()
    {
        return view('home', compact('usuario'));
    }

    public function home()
    {
        $opinioes = Opiniao::all();
        $empresas = Empresa::all();
        $usuario = Usuario::all();

        return view('home', compact('opinioes', 'empresas', 'usuario'));
    }

    public function listaEmpresas()
    {
        $empresas = Empresa::all();
        return view('lista-empresas', compact('empresas'));
    }

    public function empresa(Empresa $empresa)
    {

        return view('empresa', compact('empresa'));
    }
}