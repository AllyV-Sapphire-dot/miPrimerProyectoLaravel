<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Coquette 🎀</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body class="contenedor-principal">

    <div class="tarjeta">
        <h1 class="titulo">🌸HOLA USUARIO🌸</h1>
        
        <form method="POST" action="/procesar" class="formulario">
            @csrf
            
            <div class="grupo">
                <label>Nombre:</label>
                <input type="text" name="nombre" class="input-coquette" placeholder="Tu nombre..." required>
            </div>

            <div class="grupo">
                <label>Edad:</label>
                <input type="number" name="edad" class="input-coquette" placeholder="Tu edad..." required>
            </div>

            <button type="submit" class="boton-magico">
                Enviar Datos ✨
            </button>
        </form>
    </div>

</body>
</html>