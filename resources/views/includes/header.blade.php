<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"></link>
    <title>Document</title>
</head>
<body>
<header>
    <h1>Página nueva</h1>
    <h2>{{ asset('assets/css/style.css') }}</h2>
    <nav>
        <ul>
            <li><a href="{{ url('hola') }}">Hola</a></li>
            <li><a href="{{ url('adios') }}">Adios</a></li>
        </ul>
    </nav>
</header>
