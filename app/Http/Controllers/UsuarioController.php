<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class UsuarioController extends Controller
{
    // Carga la vista del formulario [cite: 38, 108]
    public function formulario()
    {
        return view('formulario'); 
    }

    // Procesa la información enviada [cite: 42, 111]
    public function procesar(Request $request) 
    {
        // 1. Validación de datos [cite: 112, 113, 138, 139]
        $request->validate([
            'nombre' => 'required', 
            'edad' => 'required|numeric', 
            'ocupacion' => 'required' 
        ]);

        // 2. Obtener los datos del formulario [cite: 118, 142]
        $nombre = $request->input('nombre'); 
        $edad = $request->input('edad'); 
        $ocupacion = $request->input('ocupacion'); 

        // 3. Lógica para determinar si es mayor de edad [cite: 122, 144, 147]
        if ($edad >= 18) { 
            $mensaje = "Eres mayor de edad"; 
        } else {
            $mensaje = "Eres menor de edad"; 
        }

        // 4. Retornar la vista de resultados con la información [cite: 128, 129, 148, 149]
        return view('resultado', [
            'nombre' => $nombre, 
            'edad' => $edad, 
            'ocupacion' => $ocupacion, 
            'mensaje' => $mensaje 
        ]);
    }
}