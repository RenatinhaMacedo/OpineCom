@extends('main')

@section('head')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OpineCom.</title>
        <!-- Importanto CSS -->
        @vite(['resources/sass/home.scss'])
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- importanto Javascript -->
        <script src="https://kit.fontawesome.com/e9ade42bcc.js" crossorigin="anonymous"></script>

    </head>
@endsection

@section('content')
<br>
<br>
<br>
    <div>
        <h1 class="display-1">{{$empresa->razao_social}}</h1>
        <h1 class="display-2">{{$empresa->email}}</h1>
        <h1 class="display-3">{{$empresa->contato}}</h1>
        <h1 class="display-4">{{$empresa->endereco}}</h1>
    </div>
<br>
    <h1 class="display-5">Faça uma opinião!</h1>
    <form action="{{route('opinioes.store')}}" method="PUT">
        <div>
            <label for="customRange3" class="form-label">Sua Opinião é NEGATIVA ou POSITIVA?</label>
            <input type="range" class="form-range" min="4" max="5" step="0.5" id="customRange3">
            <h2> NEGATIVA  POSITIVA</h2>
        </div>    
        <br>
        <div>
            <label>Título:</label>
            <input class="form-control form-control-lg" type="text" name="titulo" placeholder="Dê um título para a sua Opinião" aria-label=".form-control-lg example">
        </div>
        <br>
        <div>
            <label>Produto ou serviço:</label>
            <input class="form-control form-control-lg" type="text" placeholder="Qual foi o produto ou serviço?" aria-label=".form-control-lg example">
        </div>
        <br>
        <div>
            <label>Data:</label>
            <input class="form-control form-control-lg" type="date" aria-label=".form-control-lg example">
        </div>
        <br>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Escreva a sua opinião:</label>
            <textarea class="form-control" name="avaliacao" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <br>
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto:</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Opinar</button>
        </div>
    </form>
@endsection