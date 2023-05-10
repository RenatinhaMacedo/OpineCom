<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpineCom.</title>
    <!-- Importanto CSS -->
    @vite([
            'resources/sass/home.scss'
        ])
    <link rel="stylesheet" href="https://kit.fontawesome.com/e9ade42bcc.css" crossorigin="anonymous">

    <!-- importanto Javascript -->
    <script src="https://kit.fontawesome.com/e9ade42bcc.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
            <a class="main-text" href="#home">
                <h1 class="img-logo">OpineCom.</h1>
            </a>
        </div>
        <input type="checkbox" id="checkbox">
        <label for="checkbox" id="icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </label>
        <ul>
            <li><a href="{{route('login')}}" class="links">Login</a></li>
            <li><a href="{{route('empresas.create')}}" class="links">Cadastro de empresa</a></li>
            <li><a href="{{route('usuarios.create')}}" class="links">Cadastro de usuário</a></li>
            {{-- <li><a href="{{route('opinioes.create')}}" class="links">Opinião</a></li> --}}
            <li><a href="#" class="links">Contato</a></li>
            <li><a href="{{route('login.destroy')}}" class="links">Sair</a></li>
        </ul>
    </nav>

    <!-- Main section -->
    <section id="home" class="main-section">
        <div class="info" data-aos="fade-right">
            <h1 class="h1-main">OpineCom.</h1>
            <p class="p-main">
                Com o OpineCom, compartilhar suas opiniões nunca foi tão fácil e intuitivo!
                Não deixe mais suas experiências passarem em branco, experimente o OpineCom agora mesmo e faça sua voz ser ouvida!
            </p>
            <a href="{{route('empresas.index')}}" class="explore">Começe aqui!</a>
        </div>

        <div class="imagem-container">
            <img class="img-main" src="{{ asset('image/main-section/hero-img.svg') }}" alt="">
        </div>
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
                    <P class="text-card"> Espaço para opiniões e sugestões de clientes, visando aproximação com empresas e melhoria da qualidade dos produtos e serviços.</P>
                </div>

                <div  class="cards">
                    <img class="img-cards" src="/Image/cards/gear.svg" alt="">
                    <h4 class="title-card">Consumidor / Empresa</h4>
                    <P class="text-card">Permitir que empresas tenham acesso ao feedback dos clientes, para que possam melhorar seus produtos e serviços e resolver problemas.</P>
                </div>

                <div  class="cards">
                    <img class="img-cards" src="/Image/cards/handshake.svg" alt="">
                    <h4 class="title-card">Transparência e confiança</h4>
                    <P class="text-card">Promover transparência e confiança entre consumidores e empresas, estimulando boas práticas de mercado e protegendo os direitos do consumidor.</P>
                </div>
            </div>
        </div>
    </section>


    <!-- Avaliações -->
    <section class="avaliacoes-section">
        <div class="title-ranking">
            <h2 class="main-title-ranking">Avaliações recentes</h2>
            <div class="line-main-title"></div>
        </div>
        <!-- Objetivo cards -->
        @foreach($opinioes as $opiniao)
        <div class="avaliacoes">
            <div class="row-avaliacoes" data-aos="fade-right">
                <div class="cards-avaliacoes">
                    <img class="img-people" src="/Image/Avaliacao/people.png" alt="">
                    <h4 class="title-card-avaliacoes">{{$opiniao->nome}}</h4>
                    <img class="img-cards-avaliacoes" src="/Image/Avaliacao/stars-5.svg" alt="">
                    <P class="text-card-avaliacoes">{{$opiniao->avaliacao}}</P>
                </div>
                <br>
        @endforeach
    </section>

    <!-- Gatilhos mentais -->
    <section class="gatilhos-section">
        <div class="title-gatilho">
            <h4 class="subtitle">Suas historias</h4>
            <h2 class="main-title-ranking">Cada avaliação conta uma historia</h2>
            <div class="line-main-title"></div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="logo">
            <p class="copyright-footer">©2023 OpineCom </p>
        </div>
    </footer>

    <script src="/js/script.js" defer></script>
    </body>
</html>
