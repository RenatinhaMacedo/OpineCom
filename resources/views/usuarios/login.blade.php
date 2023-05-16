<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        @vite(['resources/sass/app.scss'])

        <title>Login</title>
    </head>

    <body class="login-unico">
        <section class="area-login">
            <div class="login">
                <div>
                    <img src="{{ asset('/brand/logo.jpg') }}">
                </div>

                <form action="{{ route('login.store') }}" method="POST">
                    @csrf

                    <h1 class='log'>Login</h1>
                    <input type="email" name="email" placeholder="Email">

                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <input type="password" name="password" placeholder="Senha">

                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <label class="tipo" for="">Tipo:</label>
                    <select name="tipo">
                        <option value="usr">Usuário</option>
                        <option value="emp">Empresa</option>
                    </select>
                    @error('tipo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <a href="{{route('usuarios.create')}}" class="links">Cadastro Usuário.</a>
                    <a href="{{route('empresas.create')}}" class="links">Cadastro Empresa.</a>
                    <input type="submit" value="Entrar">
            </div>
        </section>
        </form>
        </div>
    </body>

</html>
