<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OI</title>
    </head>
    <body>
        <div>
            <head>
                <a href="#">Login</a>
                <a href="#">Cadastrar-se</a>
                <a href="{{route('opinioes.create')}}">Fazer uma publicação</a>
                <a href="{{route('empresas.create')}}">Cadastrar uma empresa</a>
            </head>
        </div>
        @yield('content')
    </body>
</html>
