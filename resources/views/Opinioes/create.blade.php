<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, inicial-scale=1.0">

        @vite(['resources/sass/create.scss'])

        <title>Deixe sua Opinião!</title>
    </head>
    <body>
        <div class="container">
            <div class="form-image">
                <img src="{{ asset('/brand/undraw_reviews.svg') }}">
            </div>
            <div class="form">
                <form method="POST" action="{{ route('opinioes.store') }}" method="POST" enctype="multipart/form-data">
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
                            <textarea row="6" style="width: 26em" type="string" id="avaliacao" name="avaliacao" placeholder="Digite sua Opinião"> </textarea>
                        </div>
                    </div>
                        <div class="mb-3">
                            <label for="">Foto</label>
                            <input type="file" name="imagem" class="form-control">
                        </div>
                    <div class="login-button">
                        <button type="submit">Cadastrar</button>
                        <button><a href="{{route('login')}}">Voltar</a></button>
                    </div>

                </form>
            </div>
        </div>
    </body>

</html>
