<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de Opiniões</title>
    </head>
    <body>
        <div class="container mb-3">
            <h1>Nova Opinião</h1>

            <form method="POST" action="{{ route('opinioes.store') }}">
                @csrf

                <div class="mb-3">
                    <label>Titulo</label>
                    <input type="text" name="titulo" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Empresa</label>
                    <input type="text" name="empresa" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Produto/Serviço</label>
                    <input type="text" name="produto" class="form-control">

                </div>

                <div class="mb-3">
                    <label>Avaliação</label>
                    <input type="text" name="avaliacao" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Data</label>
                    <input type="date" name="data" class="form-control">
                </div>

                <div>
                    <input type="submit" value="Salvar Avaliação" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
