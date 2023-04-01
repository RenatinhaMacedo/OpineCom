<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Empresa #{{ $empresa->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $empresa->razao_social }} - {{ $empresa->razao_social}} :</h1>

            <h3>{{$empresa->cnpj}} - {{ $empresa->cnpj }} :</h3>

            <h3>{{ $empresa->endereco }} :</h3>

            <h3>{{ $empresa->contato }} :</h3>


            <a class="btn btn-light" href="{{ route('empresas.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('empresas.edit', $empresa->id) }}">Editar</a>

            <form method="POST" action="{{ route('empresas.destroy', $empresa->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Empresa" class="btn btn-danger">
            </form>
        </div>
    </body>
</html>
