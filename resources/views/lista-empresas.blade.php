@extends('main')

@section('head')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OpineCom.</title>
        <!-- Importanto CSS -->
        @vite(['resources/sass/home.scss'])
        <link rel="stylesheet" href="https://kit.fontawesome.com/e9ade42bcc.css" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- importanto Javascript -->
        <script src="https://kit.fontawesome.com/e9ade42bcc.js" crossorigin="anonymous"></script>

    </head>
@endsection

@section('content')
    <section class="busca_empresa my-5">
        <div class="title-ranking">
            <h2 class="main-title-ranking">Buscar empresa</h2>
            <div class="line-main-title"></div>
        </div>

        <div class="pesquisa">
            <form action="{{ route('empresas.busca') }}" method="GET">
                <input type="text" name="busca" class="form-control">
                <input type="submit" value="Buscar">
            </form>
        </div>

        <div class="row my-5">
            @foreach ($empresas as $empresa)
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title my-3">Razão Social: {{$empresa->razao_social}}</h5>
                            <h6 class="card-subtitle my-1">CNPJ: {{$empresa->cnpj}}</h6>
                            <h6 class="card-email my-1">Email: {{$empresa->email}}</h6>
                            <h6 class="card-text my-1">Endereço: {{$empresa->endereco}}</h6>
                            <h6 class="card-contato my-2">Contato: {{$empresa->contato}}</h6>
                            <a href="#" class="card-link">Ver</a>
                        </div>
                    </div>

                </div>

        </div>
        @endforeach


        </div>

    </section>
@endsection
