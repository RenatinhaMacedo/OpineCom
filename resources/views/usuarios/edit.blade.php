@extends('main')

@section('content')

<form action="{{ route('usuario.update', $usuario->id) }}" method="post">
    @csrf
    @method('PUT')
        <div>
            <label>Nome: </label>
            <input type="text" name="nome" value="{{$usuario->nome}}">
        </div>
        <div>
            <label>Idade: </label>
            <input type="double" name="idade" value="{{$usuario->idade}}">
        </div>
        <div>
            <label>Documento: </label>
            <input type="varchar" name="documento" value="{{$usuario->documento}}">
        </div>
        <div>
            <label>E-mail</label>
            <input type="email" name="email" value="{{$usuario->email}}">
        </div>
        <div>
            <label>Senha: </label>
            <input type="password" name="senha" value="{{$usuario->name}}">
        </div>

        <div>
            <input type="submit" value="Atualizar o usuário">
        </div>
    </form>
@endsection
