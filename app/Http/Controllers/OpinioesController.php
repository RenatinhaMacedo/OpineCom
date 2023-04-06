<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Opiniao;

class OpinioesController extends Controller
{
    public function index()
    {
        $Opiniao = Opiniao::all();
        return view('opinioes.index', compact('opinioes'));
    }

    public function create()
    {
        return view('opinioes.create');
    }

    public function store(Request $requisicao)
    {
        $opniao = new Opiniao();

        $opniao->titulo = $requisicao->titulo;
        $opniao->nome = $requisicao->nome;
        $opniao->empresa = $requisicao->empresa;
        $opniao->produto = $requisicao->produto;
        $opniao->avaliacao = $requisicao->avaliacao;
        $opniao->data = $requisicao->data;
        $opniao->save();

        return redirect()->route('opinioes.show', $opniao->id);
    }

    public function show(Opiniao $opiniao)
    {
        return view('opinioes.show', compact('opiniao', $opiniao->id));
    }


    public function edit(Opiniao $opiniao)
    {
        return view('opinioes.edit', compact('opinioes'));
    }

    public function update(Request $requisicao, Opiniao $Opiniao)
    {
        $Opiniao->update($requisicao->all());

        return redirect()->route('opinioes.show', $Opiniao->id);
    }


    public function destroy(Opiniao $usuario)
    {
        $usuario->delete();

        return redirect()->route('opinioes.index');
    }
}
