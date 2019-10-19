<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela de Login - Lara Invest</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">

    </div>

    <section id="conteudo-view" class="login">
        <h1>Lara Invest</h1>
        <h2>Gerenciador de Investimento com Laravel</h2>

        {!! Form::open(['route' => 'user.login', 'method'=> 'post']) !!}

        <p>Acesse o Sistema</p>
        <label>
            {!! Form::text('username', null, ['class' => 'input', 'placeholder'=> 'Didite seu E-mail']) !!}
        </label>
        <label>
                {!! Form::password('password',['placeholder'=> 'Didite sua senha']) !!}
        </label>
        <label>
        {!! Form::submit('Entrar')!!}
        </label>

        {!! Form::close() !!}

    </section>
    
</body>
</html>