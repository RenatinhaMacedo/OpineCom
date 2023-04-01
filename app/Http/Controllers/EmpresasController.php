<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{

    public function index()
    {

        $empresas = Empresa::all();


        return view('empresas.index', compact('empresas'));
    }


    public function create()
    {
        return view('empresas.create');
    }


    public function store(Request $requisicao)
    {
        $requisicao->validate([
            'razao_social' => 'required|string',
            'cnpj' => 'required|max_digits:14'
        ],[
            'razao_social.required' => "É obrigatório informar razão social",
            'cnpj.required'=> "É obrigatório informar o cnpj"
        ]);

        $empresa = new empresa();


        $empresa->razao_social = $requisicao->razao_social;
        $empresa->cnpj = $requisicao->cnpj;
        $empresa->endereco = $requisicao->endereco;
        $empresa->contato = $requisicao->contato;


        $empresa->save();


        return redirect()->route('empresas.show', $empresa->id);
    }

    public function show(empresa $empresa)
    {

        return view('empresas.view', compact('empresa'));
    }


    public function edit(empresa $empresa)
    {

        return view('empresas.edit', compact('empresa'));
    }


    public function update(Request $requisicao, empresa $empresa)
    {

        $empresa->update($requisicao->all());


        return redirect()->route('empresas.show', $empresa->id);
    }


    public function destroy(empresa $empresa)
    {
        $empresa->delete();

        return redirect()->route('empresas.index');
    }
}
