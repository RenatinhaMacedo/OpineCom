<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Tela de Login</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                background-color: beige;
            }
            div{
                background-color: rgba(0,0,0, 0.8);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 80px;
                border-radius: 15px;
                color: #fff;
            }
            input{
                padding: 15px;
                border: none;
                outline: none;
                font-size: 15px;
            }
            button{
                background-color: dodgerblue;
                border: none;
                padding: 15px;
                width: 100%;
                border-radius: 10px;
                color: white;
                font-size: 15px;
            }
            button:hover{
                background-color: deepskyblue;
                cursor: pointer;
            }
        </style>

    </head>
    <body>
       <div>
        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <h1>Login</h1>
            <input type="text" name="email" placeholder="Email, usuario, ou cnpj">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <button>Enviar</button>
        </form>
       </div>
    </body>
</html>
