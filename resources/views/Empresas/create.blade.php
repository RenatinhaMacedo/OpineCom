<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, inicial-scale=1.0">

        @vite(['resources/sass/app.scss' ])

        <title>Formulário Cadastro de Empresas</title>
    </head>

    <body>
        <div class="container">
            <div class="form-image">
                <img src="{{ asset('brand/undraw_forms_re_pkrt.svg') }}">
            </div>
            <div class="form">
                <form action="{{ route('empresas.store') }}" method="POST">
                    @csrf

                    <div class="form/header">
                        <div class="tittle">
                            <h1>Cadastro de Empresa</h1><br>
                        </div>
                        <div class="login-button">
                            <button><a href="{{ route('login') }}">Entrar</a></button>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="empresa">Nova Empresa</label>
                            <input id="empresa" type="text" name="empresa" placeholder="Nova Empresa" required>
                        </div>

                        @error('empresa')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <div class="input-box">
                            <label for="razao">Razão Social</label>
                            <input id="razao" type="text" name="razao" placeholder="Razão Social" required>
                        </div>

                        <div class="input-box">
                            <label for="email">Digite seu email</label>
                            <input id="email" type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="input-box">
                            <label for="number">CNPJ</label>
                            <input id="cnpj" type="number" name="cnpj" placeholder=" xx.xxx.xxx/xxxx-xx" required>
                        </div>
                        <div class="input-box">
                            <label for="number">Documento</label>
                            <input id="documento" type="number" name="documento" placeholder=" xxx.xxx.xxx-xx" required>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-box">
                                    <label for="password">Senha</label>
                                    <input id="password" type="password" name="password" placeholder="digite sua senha" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="input-box">
                                    <label for="password">Confirme a Senha</label>
                                    <input id="password" type="password" name="password_confirmation" placeholder="digite sua senha" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="login-button">
                        <button type="submit">Cadastrar</button>
                    </div>
                </form>
    </body>
</html
