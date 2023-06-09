@extends('template-vazio')

@section('head')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">

    @vite([
        'resources/sass/create.scss'
    ])

    <title>Formulário de Edição</title>
</head>


@section('content')
    <body>
        <div class="container">
            <div class="form-image">
                <img src="{{ asset('/brand/undraw_shopping_re_hdd9.svg') }}">
            </div>
            <div class="form">
                <form action="{{route('usuarios.update', '$usuario->id')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form/header">
                        <div class="tittle">
                            <h1>Seus dados</h1><br>
                        </div>
                        <div class="login-button">
                            <button><a href="{{ route('login') }}">Entrar</a></button>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="nome">Nome</label>
                            <input id="nome" type="text" name="nome" value="{{$usuario->nome}}" required>

                            @error('nome')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="input-box">
                            <label for="documento">Documento</label>
                            <input id="documento" type="number" name="documento" value="{{$usuario->documento}}" required>
                        </div>

                        <div class="input-box">
                            <label for="email">Digite seu email</label>
                            <input id="email" type="email" name="email" placeholder="{{$usuario->email}}" required>
                        </div>

                        <div class="input-box">
                            <label for="number">Telefone</label>
                            <input id="number" type="tel" name="telefone" placeholder="{{$usuario->telefone}}" required>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="input-box">
                                    <label for="password">Senha</label>
                                    <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="input-box">
                                    <label for="password">Confirme a Senha</label>
                                    <input id="password" type="password" name="password_confirmation" placeholder="Confirme sua Senha" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="login-button">
                        <button type="submit">Finalizar</button>
                        <button><a href="{{route('home')}}">Voltar</a></button>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
