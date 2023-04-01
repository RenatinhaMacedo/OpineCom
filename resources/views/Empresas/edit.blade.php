<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Gato #{{ $empresa->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Edição do empresa {{ $empresa->id }}</h1>

            <form method="POST" action="{{ route('empresas.update', $empresa->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Razão Social</label>
                    <input type="text" name="razao_social" class="form-control" value="{{ $empresa->razao_social }}">
                </div>

                <div class="mb-3">
                    <label>CNPJ</label>
                    <input type="string" name="cnpj" class="form-control" value="{{ $empresa->cnpj }}">
                </div>

                <div class="mb-3">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control" value="{{ $empresa->endereco }}">
                </div>

                <div class="mb-3">
                    <label>Contato</label>
                    <input type="text" name="contato" class="form-control" value="{{ $empresa->contato }}">

                </div>

                <div>
                    <input type="submit" value="Atualizar Empresa" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
