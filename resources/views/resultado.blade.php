@extends('layouts.app')

@section('contenido')
    <div style="background-color: #fff0f5; padding: 20px; border-radius: 15px; border: 2px solid #ff69b4;">
        <h2 style="color: #ff1493;">✨ Resultado del Perfil ✨</h2>
        
        <p><strong>Nombre:</strong> {{ $nombre }}</p>
        <p><strong>Edad:</strong> {{ $edad }} años</p>
        <p><strong>Ocupación:</strong> {{ $ocupacion }}</p>
        
        <h3 style="color: #db7093;">{{ $mensaje }}</h3>

        <br>
        <a href="/" style="text-decoration: none; color: #ff69b4; font-weight: bold;">💖 Volver al inicio</a>
    </div>
@endsection