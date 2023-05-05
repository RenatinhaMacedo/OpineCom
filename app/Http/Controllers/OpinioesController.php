<?php

namespace App\Http\Controllers;

use App\Models\Opiniao;
use Illuminate\Http\Request;

class OpinioesController extends Controller
{
    /**
     * Lista todos os Opiniaos cadastrados
     */
    public function index()
    {
        // Pega todos os registos da tabela relacionada ao modelo Opiniao
        $opinioes = Opiniao::all();

        // Manda os dados para uma view, no caso Opiniaos.index
        return view('opinioes.index', compact('opinioes'));
    }

    /**
     * Mostra o formulário para criar um novo Opiniao
     */
    public function create()
    {
        return view('opinioes.create');
    }

    /**
     * Armazena um novo Opiniao
     */
    public function store(Request $requisicao)
    {
        // Cria um novo objeto do tipo Opiniao em branco
        $opiniao = new Opiniao();

        // Preenche os campos do objeto com os dados da requisição
        $opiniao->titulo = $requisicao->titulo;
        $opiniao->produto = $requisicao->produto;
        $opiniao->avaliacao = $requisicao->avaliacao;
        $opiniao->data = $requisicao->data;

        // Associa o usuário com a opnião
        $opiniao->usuario()->associate($requisicao->user());

        // Salva o objeto no banco de dados
        $opiniao->save();

        // Redireciona para a página de detalhes do Opiniao
        return redirect()->route('opinioes.show', $opiniao->id);
    }

    /**
     * Mostra um Opiniao específico
     *
     * O parametro $Opiniao é um objeto do tipo Opiniao que é passado automaticamente
     * pelo Laravel, pois o nome do parametro é o mesmo nome do parametro que
     * está na rota. O Laravel faz a busca no banco de dados e retorna o objeto
     * que corresponde ao id passado na rota.
     */
    public function show(Opiniao $opiniao)
    {
        // Retorna a view Opiniaos.view com o objeto $Opiniao
        return view('opinioes.view', compact('opiniao'));
    }

    /**
     * Mostra o formulário para editar um Opiniao específico
     */
    public function edit(Opiniao $opiniao)
    {
        $this->authorize('editar', $opiniao);
        // Retorna a view Opiniaos.edit com o objeto $Opiniao
        return view('opinioes.edit', compact('opiniao'));
    }

    /**
     * Atualiza um Opiniao específico
     */
    public function update(Request $requisicao, Opiniao $opiniao)
    {
        $this->authorize('editar', $opiniao);
        // Atualiza o objeto com os dados da requisição
        $opiniao->update($requisicao->all());

        // Redireciona para a página de detalhes do Opiniao
        return redirect()->route('opinioes.show', $opiniao->id);
    }

    /**
     * Remove um Opiniao específico
     */
    public function destroy(Opiniao $opiniao)
    {
        $opiniao->delete();

        return redirect()->route('opinioes.index');
    }
}
