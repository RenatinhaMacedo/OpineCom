@extends('main')

@section('content')
    <h2>Lista de publicações já feitas</h2>

    @foreach ($opiniao as $opiniao)
        <br>
        <h1>{{$opiniao->titulo}}</h1>
        <h1>{{$opiniao->data}}</h1>
        <h1>{{$opiniao->nome}}</h1>
        <h1>{{$opiniao->empresa}}</h1>
        <a href="{{route('opinioes.show', $opiniao->id)}}">Ver</a>
        <br>
    @endforeach
@endsection
