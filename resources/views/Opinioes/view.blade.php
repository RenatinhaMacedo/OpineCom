<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Opinião #{{ $opiniao->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Título: {{ $opiniao->titulo }} </h1>

            <h3>Nome: {{ $opiniao->nome }} </h3>

            <h3>Empresa: {{ $opiniao->empresa }} </h3>

            <h3>Produto: {{ $opiniao->produto }} </h3>

            <h3>Avaliação: {{ $opiniao->avaliacao }} </h3>

            <h3>Data: {{ $opiniao->data }} </h3>



            <a class="btn btn-light" href="{{ route('opinioes.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('opinioes.edit', $opiniao->id) }}">Editar</a>

            <form method="POST" action="{{ route('opinioes.destroy', $opiniao->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Opiniao" class="btn btn-danger">
            </form>
        </div>
    </body>
</html>
