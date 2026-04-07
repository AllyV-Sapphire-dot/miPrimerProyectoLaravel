@extends('layouts.app') 

@section('contenido')
    <div style="background-color: #fff0f5; padding: 20px; border-radius: 15px;"> <h2>Formulario de Usuario</h2>
        
        <form method="POST" action="/procesar">
            @csrf <label>Nombre: </label>
            <input type="text" name="nombre"> 
            <br><br>

            <label>Edad: </label>
            <input type="number" name="edad"> 
            <br><br>

            <label>Ocupación: </label>
            <select name="ocupacion"> 
                <option value="estudiante">Estudiante</option>
                <option value="profesionista">Profesionista</option>
                <option value="otro">Otro</option>
            </select>
            <br><br>

            <button type="submit" style="background-color: #ff69b4; color: white; border: none; padding: 10px 20px; border-radius: 20px;">
                Enviar ✨
            </button>
        </form>
    </div>
@endsection