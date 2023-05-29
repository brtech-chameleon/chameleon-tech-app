<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/css-modules/cards.css')}}">
        <link rel="stylesheet" href="{{asset('css/css-modules/navbar.css')}}">
        <link rel="stylesheet" href="{{asset('css/css-modules/tabs.css')}}">
        
        <title>Chameleon Tech - @yield('title')</title>
    </head>
    <body>
        @include('site.layout.partials.header.menu')
        @yield('content')
    </body>
</html>