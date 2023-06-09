<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuario = Usuario::all();
        return view('usuarios.index', compact('usuario'));

    }
    public function login()
    {
        return view('usuarios.login');

    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $requisicao)
    {
        $requisicao->validate([
            'password' => 'required|confirmed'
        ]);

        $usuario = new Usuario();

        $usuario->nome = $requisicao->nome;
        $usuario->documento = $requisicao->documento;
        $usuario->telefone = $requisicao->telefone;
        $usuario->email = $requisicao->email;
        $usuario->senha = Hash::make($requisicao->password);

        $usuario->save();

        return redirect()->route('usuarios.show', $usuario->id);
    }

    public function list()
    {
        return view('usuarios.list');
    }

    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }


    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $requisicao, Usuario $usuario)
    {
        $usuario->update($requisicao->all());

        return redirect()->route('usuarios.show', $usuario->id);
    }


    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index');
    }
}
