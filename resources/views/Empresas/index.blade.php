<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        @vite(['resources/sass/index.scss'])
        <title>Lista de Empresas</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Empresas</h1>

            <a class="btn btn my-2" href="{{route('empresas.create')}}">Nova Empresa</a>

            <table class="table table table-primary">
                <tr class="barra">
                    <th>Razão Social</th>
                    <th>CNPJ</th>
                    <th>Endereço</th>
                    <th>Contato</th>
                    <th></th>
                </tr>

                @foreach ($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa->razao_social }}</td>
                        <td>{{ $empresa->cnpj }}</td>
                        <td>{{ $empresa->endereco }}</td>
                        <td>{{ $empresa->contato }}</td>
                        <td>
                            <a class="link" href="{{ route('empresas.show', $empresa->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>

            {{ $empresas->links() }}
        </div>


    </body>
</html>
