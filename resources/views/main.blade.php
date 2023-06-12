<!DOCTYPE html>
<html lang="pt-br">
    @yield('head')
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
            <a class="main-text" href="{{route('home')}}">
                <h1 class="img-logo">OpineCom.</h1>
            </a>
        </div>
        <input type="checkbox" id="checkbox">
        <label for="checkbox" id="icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </label>
        <ul>
            <li><a href="{{route('lista.empresas')}}" class="links">Opinar!</a></li>
            @guest
                <li><a href="{{route('empresas.create')}}" class="links">Cadastro de empresa</a></li>
               <li><a href="{{route('usuarios.create')}}" class="links">Cadastro de usuário</a></li>
            @endguest
           {{-- <li><a href="{{route('opinioes.create')}}" class="links">Opinião</a></li> --}}
            @auth
                <li><a href="{{route('login.destroy')}}" class="links">Sair</a></li>
            @endauth
            @guest
                <li><a href="{{route('login')}}" class="links">Login</a></li>
            @endguest
        </ul>
    </nav>
        @yield('content')
    <!-- Footer -->
    <footer>
        <div class="logo">
            <p class="copyright-footer">©2023 OpineCom </p>
        </div>
    </footer>

    <script src="/js/script.js" defer></script>
    </body>
</html>
