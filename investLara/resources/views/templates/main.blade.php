<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invest larah</title>

    @yield('css-view')
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-5.11.2-web/css/all.css')}}">
    
</head>
<body>
    {{-- Menu Lateral --}}
    @include('templates.menu-lateral')

    <section id="view-content">
        @yield('conteudo-view')
    </section>
    
    @yield('js-view')
</body>
</html>