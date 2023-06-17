@php
    $guards = config('auth.guards');

    foreach ($guards as $guardName => $guardConfig) {
        if (Auth::guard($guardName)->check()) {
            $user = Auth::guard($guardName)->user();
            break;
        }
    }
@endphp

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
            @if(!isset($user))
                <li><a href="{{route('empresas.create')}}" class="links">Cadastro de empresa</a></li>
               <li><a href="{{route('usuarios.create')}}" class="links">Cadastro de usuário</a></li>
            @endif
           {{-- <li><a href="{{route('opinioes.create')}}" class="links">Opinião</a></li> --}}



            @auth('usr')
                <li><a href="{{route('empresas.edit', $user->id)}}" class="links">Meus dados</a></li>
                <li><a href="{{route('login.destroy')}}" class="links">Sair</a></li>
            @endauth

            @auth('emp')
                <li><a href="{{route('usuarios.edit', $user->id)}}" class="links">Meus dados</a></li>
                <li><a href="{{route('login.destroy')}}" class="links">Sair</a></li>
            @endauth

            @if(!isset($user))
                <li><a href="{{route('login')}}" class="links">Login</a></li>
            @endif
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
