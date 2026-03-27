<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Ruta para ver el formulario [cite: 102]
Route::get('/', function () {
    return view('formulario');
});

// Ruta para procesar los datos [cite: 144]
Route::post('/procesar', function (Request $request) {
    $nombre = $request->input('nombre');
    $edad = $request->input('edad');

    if ($edad >= 18) {
        $mensaje = "Hola $nombre, eres mayor de edad";
    } else {
        $mensaje = "Hola $nombre, eres menor de edad";
    }

    return view('resultado', ['mensaje' => $mensaje]);
});