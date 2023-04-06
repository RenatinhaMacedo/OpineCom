@extends('main')

@section('content')

<div>
    <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Idade</th>
                    <th>E-mail</th>
                </tr>

    @foreach($usuario as $usuario)

                <tr>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->documento }}</td>
                    <td>{{ $usuario->idade }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>
                        <a class="link" href="{{ route('usuarios.show', $usuario->id) }}"> VER
                        </a>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
@endsection
