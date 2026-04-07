<!DOCTYPE html>
<html>
<head>
    <title>Mini Perfil</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
</head>
<body>
    <header>
        <h1>Aplicación Laravel</h1>
    </header>

    <main>
        @yield('contenido') </main>

    <footer>
        <p>Práctica Laravel</p>
    </footer>
</body>
</html>