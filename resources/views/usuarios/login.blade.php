@extends('main')

@section('content')
    <div>
        <form action="{{route('usuarios.login')}}" method="post">
            @csrf
            <div>
                <label>E-mail: </label>
                <input type="email">
            </div>

            <div>
                <label>Senha</label>
                <input type="password">
            </div>

            <div>
                <input type="submit" value="Logar">
            </div>
        </form>
    </div>
@endsection