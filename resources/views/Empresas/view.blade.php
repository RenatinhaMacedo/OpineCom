<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        @vite(['resources/sass/view.scss'])

        <title>Empresa #{{ $empresa->id }}</title>
    </head>
    <body>
        <div class="container">
        <table class="table table table-primary">
            <tr class="barra">
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Endereço</th>
                <th>Contato</th>
            </tr>
            <tr>
                <td>{{ $empresa->razao_social }}</td>
                <td>{{ $empresa->cnpj }}</td>
                <td>{{ $empresa->endereco }}</td>
                <td>{{ $empresa->contato }}</td>
            </tr>
        </table>
                <a class="btn btn-warning" href="{{ route('empresas.index') }}">Voltar a lista</a>

                <div class="form">
                <form method="POST" action="{{ route('opinioes.store') }}">
                    @csrf
                    <div class="form/header">
                        <div class="tittle">
                            <h1>Cadastre sua Opinião</h1><br>
                        </div>
                        <div class="login-button">
                            <button><a href="{{ route('login') }}">Entrar</a></button>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="titulo">Título</label>
                            <input id="titulo" type="text" name="titulo" placeholder="Titulo" required>
                        </div>


                    <div class="input-group">
                        <div class="input-box">
                            <label for="titulo">Seu nome</label>
                            <input id="nome" type="text" name="nome" placeholder="Seu nome" required>
                        </div>

                        <div class="input-box">
                            <label for="empresa">Empresa</label>
                            <input id="empresa" name="empresa" type="text" placeholder="Empresa" required>
                        </div>
                        <div class="input-box">
                            <label for="produto">Produto/Serviço</label>
                            <input id="produto" type="text" name="produto" placeholder="Produto/Serviço" required>
                        </div>
                        <div class="input-box">
                            <label for="data">Data</label>
                            <input id="data" type="date" name="data" placeholder="Data" required>
                        </div>

                        <div class="input-box">
                            <label for="avaliacao">Avaliação</label>
                            <textarea row="6" style="width: 65em" type="string" id="avaliacao" name="avaliacao" placeholder="Digite sua Opinião"> </textarea>
                        </div>
                    </div>

                    <label class="picture" tabUndex="0">
                    <input type="file" accept="image/*" class="picture__input" />
                    <span class="picture__image"></span>
                    </label>

                    <div class="login-button">
                        <button type="submit">Cadastrar</button>
                        <button><a href="{{route('login')}}">Voltar</a></button>
                    </div>

                </form>

                <form method="POST" action="{{ route('empresas.destroy', $empresa->id) }}">
                    @csrf
                    @method('DELETE')
                    <br>
                    <input type="submit" value="Excluir Empresa" class="btn btn-danger">
                </form>
            </div>
    </body>
</html>
