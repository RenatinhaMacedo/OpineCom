@extends('main')

@section('content')
    <h1>{{$opiniao->titulo}}</h1>
    <h2>{{$opiniao->nome}}</h2>
    <h2>{{$opiniao->data}}</h2>

    <a href="{{route('usuarios.index')}}">Voltar</a>
    <a href="{{route('opinioes.edit')}}">Editar</a>
    <a href="#">Excluir</a>
@endsection
