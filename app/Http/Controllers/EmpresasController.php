<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmpresasController extends Controller
{

    public function index()
    {

        $empresas = Empresa::paginate();


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


        $empresa = new Empresa();

        $empresa->razao_social = $requisicao->razao_social;
        $empresa->email =$requisicao->email;
        $empresa->cnpj = $requisicao->cnpj;
        $empresa->endereco = $requisicao->endereco;
        $empresa->contato = $requisicao->contato;
        $empresa->senha = Hash::make($requisicao->password);

        $empresa->imagem = '';

        if($requisicao->hasFile('imagem')){
            $arquivo = $requisicao->file('imagem')->store('empresas', ['disk' => 'public']);
            $empresa->imagem = $arquivo;
        }

        $empresa->save();

        return redirect()->route('empresas.show', $empresa->id);
    }

    public function show(Empresa $empresa)
    {

        return view('empresa', compact('empresa'));
    }


    public function edit(Empresa $empresa)
    {

        return view('empresas.edit', compact('empresa'));
    }


    public function update(Request $requisicao, Empresa $empresa)
    {

        $empresa->update($requisicao->all());


        return redirect()->route('empresas.show', $empresa->id);
    }


    public function destroy(Empresa $empresa)
    {
        $empresa->delete();

        return redirect()->route('empresas.index');
    }

    public function busca(Request $requisicao)
    {
        $busca = $requisicao->query('busca');

        $empresas = Empresa::where(function ($query) use ($busca) {
            $query->where('razao_social', 'LIKE', "%$busca%")
                ->orWhere('cnpj', 'LIKE', "%$busca%");
        })
        ->paginate();

        return view('lista-empresas', compact('empresas'));
    }

}
