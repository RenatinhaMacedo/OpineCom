<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de Opiniões</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Opiniões</h1>

            {{-- <a class="btn btn-outline-success my-2" href="{{ route('opinioes.create') }}">Nova Opiniao</a> --}}

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Titulo</th>
                    <th>Nome</th>
                    <th>Empresa</th>
                    <th>Produto</th>
                    <th>Avaliação</th>
                    <th>Data</th>
                </tr>

                @foreach ($opinioes as $opiniao)
                    <tr>
                        <td>{{ $opiniao->titulo }}</td>
                        <td>{{ $opiniao->nome }}</td>
                        <td>{{ $opiniao->empresa }}</td>
                        <td>{{ $opiniao->produto }}</td>
                        <td>{{ $opiniao->avaliacao }}</td>
                        <td>{{ $opiniao->data }}</td>
                        <td>
                            <a class="link" href="{{ route('opinioes.show', $opiniao->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>
