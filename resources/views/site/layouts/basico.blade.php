<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Lavabooks - @yield('titulo')</title>
</head>
<body>
    @include('site.layouts._partials.cabecalho')
    @yield('menu')
    @include('site.layouts._partials.rodape')

</body>
</html>

