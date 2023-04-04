@extends('main')

@section('content')
<form action="{{route('usuarios.store')}}" method="POST">
    @csrf
        <div>
            <label>Nome: </label>
            <input type="text" name="nome">
        </div>
        <div>
            <label>Idade: </label>
            <input type="double" name="idade">
        </div>
        <div>
            <label>Documento: </label>
            <input type="varchar" name="documento">
        </div>
        <div>
            <label>E-mail</label>
            <input type="email" name="email">
        </div>
        <div>
            <label>Senha: </label>
            <input type="password" name="senha">
        </div>

        <div>
            <input type="submit" value="Criar o usuário">
        </div>
    </form>
@endsection
