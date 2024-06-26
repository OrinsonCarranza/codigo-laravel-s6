<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Aplicación Laravel')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>EMPRESA</h1>
        <nav>
            <a href="/">Inicio</a> -
            <a href="{{ route('personas.index') }}">Personas</a> -
            <a href="{{ route('personas.create') }}">Crear Persona</a> -
            <a href="{{ route('contacto') }}">Contacto</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
