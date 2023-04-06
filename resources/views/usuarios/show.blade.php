@extends('main')

@section('content')
    <h1>{{ $usuario->nome }}</h1>
    <h2>{{$usuario->idade}}</h2>
    <h2>{{$usuario->documeto}}</h2>
    <h2>{{$usuario->email}}</h2>
    <h2>{{$usuario->senha}}</h2>

    <a href="{{route('usuarios.edit', $usuario->id)}}">Editar</a>
    <a href="{{route('usuarios.index')}}">Voltar</a>
    <a href="{{route('usuarios.destroy', $usuario->id)}}">Excluir</a>
@endsection
