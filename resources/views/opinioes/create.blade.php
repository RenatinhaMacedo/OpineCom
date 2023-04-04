@extends('main')

@section('content')
<form action="{{route('opinioes.store')}}" method="POST">
    @csrf
        <div>
            <label>Titulo: </label>
            <input type="text" name="titulo">
        </div>
        <div>
            <label>Data: </label>
            <input type="date" name="data">
        </div>
        <div>
            <label>Nome: </label>
            <input type="varchar" name="nome">
        </div>
        <div>
            <label>Empresa: </label>
            <input type="text" name="empresa">
        </div>
        <div>
            <label>Serviço ou produto: </label>
            <input type="text" name="produto">
        </div>

        <div>
            <label>Sua avaliação: </label>
            <input type="text" name="avaliacao">
        </div>


        <div>
            <input type="submit" value="Publicar">
        </div>
    </form>
@endsection
