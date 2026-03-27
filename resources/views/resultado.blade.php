<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
  <body class="contenedor-principal">
    <div class="tarjeta">
        <h1 class="titulo">Resultado del Análisis ✨</h1>
        
        <p class="mensaje-resultado">{{ $mensaje }}</p>
        
        <div class="grupo" style="text-align: center; margin-top: 20px;">
            <a href="/" class="boton-magico" style="text-decoration: none; display: inline-block;">
                Volver al inicio 🎀
            </a>
        </div>
    </div>
</body>
</body>
</html>