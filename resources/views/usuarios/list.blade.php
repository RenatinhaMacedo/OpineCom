@extends('main')

@section('content')
<a href="{{route('usuarios.create')}}">Criar um Usuário</a>
<a href="{{route('opinioes.create')}}">Fazer uma avalação</a>
<a href="{{route('usuarios.list')}}">Ver usuários cadastrados</a>
<a href="{{route('opinioes.index')}}">Lista de opiniões</a>

@endsection
