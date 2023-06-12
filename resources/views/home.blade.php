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

        <!-- importanto Javascript -->
        <script src="https://kit.fontawesome.com/e9ade42bcc.js" crossorigin="anonymous"></script>

    </head>
@endsection

@section('content')
    <!-- Main section -->
    <section id="home" class="main-section">
        <div class="info" data-aos="fade-right">
            <h1 class="h1-main">OpineCom.</h1>
            <p class="p-main">
                Com o OpineCom, compartilhar suas opiniões nunca foi tão fácil e intuitivo!
                Não deixe mais suas experiências passarem em branco, experimente o OpineCom agora mesmo e faça sua voz ser
                ouvida!
            </p>
            <a href="{{ route('lista.empresas') }}" class="explore">Começe aqui!</a>
        </div>

        <div class="imagem-container">
            <img class="img-main" src="{{ asset('image/main-section/hero-img.svg') }}" alt="">
        </div>
    </section>

    <section class="busca_empresa">
        <div class="title-ranking">
            <h2 class="main-title-ranking">Buscar empresa</h2>
            <div class="line-main-title"></div>
        </div>
        <!-- Objetivo cards -->
        <div class="pesquisa">
            <form action="{{ route('empresas.busca') }}" method="GET">
                <input type="text" name="busca" class="form-control">
                <input type="submit" value="Buscar">
            </form>
        </div>

        <p>Pesquise as empresas e veja as avaliações</p>
    </section>

    <section class="objetivos">
        <div class="title-ranking">
            <h2 class="main-title-ranking">Principais objetivos</h2>
            <div class="line-main-title"></div>
        </div>
        <!-- Objetivo cards -->
        <div class="objetivos">
            <div class="row" data-aos="fade-right">
                <div class="cards">
                    <img class="img-cards" src="/Image/cards/message.svg" alt="">
                    <h4 class="title-card">Registro de opiniões</h4>
                    <P class="text-card"> Espaço para opiniões e sugestões de clientes, visando aproximação com empresas e
                        melhoria da qualidade dos produtos e serviços.</P>
                </div>

                <div class="cards">
                    <img class="img-cards" src="/Image/cards/gear.svg" alt="">
                    <h4 class="title-card">Consumidor / Empresa</h4>
                    <P class="text-card">Permitir que empresas tenham acesso ao feedback dos clientes, para que possam
                        melhorar seus produtos e serviços e resolver problemas.</P>
                </div>

                <div class="cards">
                    <img class="img-cards" src="/Image/cards/handshake.svg" alt="">
                    <h4 class="title-card">Transparência e confiança</h4>
                    <P class="text-card">Promover transparência e confiança entre consumidores e empresas, estimulando boas
                        práticas de mercado e protegendo os direitos do consumidor.</P>
                </div>
            </div>
        </div>
    </section>

    <section class="ranking">
    <div class="button">
            <button id="mostrar-melhores-empresas" class="good">Melhores empresas</button>
            <button id="mostrar-piores-empresas" class="bad">Piores Empresas</button>
        </div>
        <div class="rankings">
            <div class="row-ranking">
                <div class="ranking-good">
                    <div class="title-header-good">
                        Melhores empresas que mais resolveram.
                    </div>
                    <div class="content">
                        <div class="lojas">
                            <div>
                                <span>1º</span>
                                <img class="img-ranking-good" src="Image/ranking/intersolid.png" alt="Imagem da loja Intersolid">
                                <h3>Intersolid</h3>
                            </div>
                            <div>
                                <span>2º</span>
                                <img class="img-ranking-good" src="Image/ranking/tim.png" alt="Imagem da loja Tim">
                                <h3>TIM</h3>
                            </div>
                            <div>
                                <span>3º</span>
                                <img class="img-ranking-good" src="Image/ranking/ifood.png" alt="Imagem Ifood">
                                <h3>Ifood</h3>
                            </div>
                            <div>
                                <span>4º</span>
                                <img class="img-ranking-good" src="Image/ranking/magazine.png" alt="Imagem da loja magazine">
                                <h3>Magazine Luiza</h3>
                            </div>
                            <div>
                                <span>5º</span>
                                <img class="img-ranking-good" src="Image/ranking/bigmart.jpg" alt="Imagem da loja redepas">
                                <h3> BigMart</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ranking-bad hide">
                    <div class="ranking-bad">
                        <div class="title-header-bad">
                            Empresas ruins em resolver problemas.
                        </div>
                        <div class="content">
                            <div class="lojas">
                                <div>
                                    <span class="number-bad">1º</span>
                                    <img class="img-ranking-good" src="Image/ranking/norbi.jpeg" alt="Imagem da loja Intersolid">
                                    <h3>Norbi Calçados</h3>
                                </div>
                                <div>
                                    <span class="number-bad">2º</span>
                                    <img class="img-ranking-good" src="Image/ranking/americanas.webp" alt="Imagem da loja Tim">
                                    <h3>Americanas</h3>
                                </div>
                                <div>
                                    <span class="number-bad">3º</span>
                                    <img class="img-ranking-good" src="Image/ranking/barateira.jpg" alt="Imagem Ifood">
                                    <h3>A barateira</h3>
                                </div>
                                <div>
                                    <span class="number-bad">4º</span>
                                    <img class="img-ranking-good" src="Image/ranking/sakashita.jfif" alt="Imagem da loja magazine">
                                    <h3>Sakashita</h3>
                                </div>
                                <div>
                                    <span class="number-bad">5º</span>
                                    <img class="img-ranking-good" src="Image/ranking/redepas.png" alt="Imagem da loja redepas">
                                    <h3> Redepas Jordão</h3>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Avaliações -->
    <section class="avaliacoes-section">
        <div class="title-ranking">
            <h2 class="main-title-ranking">Avaliações Postadas</h2>
            <div class="line-main-title"></div>
        </div>
        <!-- Objetivo cards -->
        @foreach ($opinioes as $opiniao)
            <div class="avaliacoes">
                <div class="row-avaliacoes" data-aos="fade-right">
                    <div class="cards-avaliacoes">
                        <h4 class="title-card-avaliacoes">Nome: {{ $opiniao->usuario->nome }}</h4>
                        <p class="text-card-avaliacoes">Título: {{ $opiniao->titulo }}</p>
                        <p class="text-card-avaliacoes">Avaliação: {{ $opiniao->avaliacao }}</p>
                        <p class="text-card-avaliacoes">Data: {{ $opiniao->data }}</p>
                        <p class="text-card-avaliacoes">Empresa:</p>
                    </div>
                    <br>
        @endforeach
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
