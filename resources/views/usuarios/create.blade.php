<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, inicial-scale=1.0">

        @vite([
            'resources/sass/app.scss'
        ])

        <title>Formulário de Cadastro</title>
    </head>

    <body>
        <div class="container">
            <div class="form-image">
                <img src="{{ asset('/brand/undraw_shopping_re_hdd9.svg') }}">
            </div>
            <div class="form">
                <form action="{{route('usuarios.store')}}" method="POST">
                    @csrf
                    <div class="form/header">
                        <div class="tittle">
                            <h1>Cadastre-se</h1><br>
                        </div>
                        <div class="login-button">
                            <button><a href="#">Entrar</a></button>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="nome">Nome</label>
                            <input id="nome" type="text" name="nome" placeholder="nome" required>
                        </div>
                        <div class="input-box">
                            <label for="documento">Documento</label>
                            <input id="documento" type="number" name="documento" placeholder="CPF" required>
                        </div>
                        <div class="input-box">
                            <label for="email">Digite seu email</label>
                            <input id="email" type="email" name="email" placeholder="email" required>
                        </div>
                        <div class="input-box">
                            <label for="number">Telefone</label>
                            <input id="number" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                        </div>
                        <div class="input-box">
                            <label for="password">Senha</label>
                            <input id="password" type="password" name="password" placeholder="digite sua senha" required>
                        </div>
                    </div>

                    <div>
                        <button class="login-button" type="submit">Cadastrar</button>
                    </div>

                </form>
            </div>
        </div>
    </body>

</html>
