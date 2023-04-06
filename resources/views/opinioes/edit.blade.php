@extends('main')

@section('content')

<form action="{{ route('opinioes.update', $opiniao->id) }}" method="post">
    @csrf
    @method('PUT')
        <div>
            <label>Titulo: </label>
            <input type="text" name="titulo" value="{{$opiniao->titulo}}">
        </div>
        <div>
            <label>Data: </label>
            <input type="date" name="data" value="{{$opiniao->data}}">
        </div>
        <div>
            <label>Nome: </label>
            <input type="text" name="nome" value="{{$opiniao->nome}}">
        </div>
        <div>
            <label>Empresa: </label>
            <input type="text" name="empresa" value="{{$opiniao->empresa}}">
        </div>
        <div>
            <label>Serviço ou produto: </label>
            <input type="text" name="produto" value="{{$opiniao->produto}}">
        </div>
        <div>
            <label>Sua Avaliacao: </label>
            <input type="text" name="avaliacao">
        </div>
        <div>
            <input type="submit" value="Atualizar o Opinião">
        </div>
    </form>
@endsection
