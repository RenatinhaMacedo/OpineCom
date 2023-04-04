@extends('main')

@section('content')
    <h2>Lista de publicações já feitas</h2>

    @foreach ($Opiniao as $opiniao)
        <br>
        <h1>{{$opiniao->titulo}}</h1>
        <a href="{{route('opinioes.edit, $opiniao->id')}}">Ver</a>
        <br>
    @endforeach
@endsection
