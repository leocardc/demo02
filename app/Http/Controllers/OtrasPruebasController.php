<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtrasPruebasController extends Controller
{
  
 
public function inicio() {
       return response('Estamos en la página inicial', 201)
           ->header('ESTADO-TOKEN', 'Hasta ahora todo bien')
           ->header('ESTADO2-TOKEN', 'La cosa sigue bien')
           ->cookie('MI-COOKIE', 'Este dato se envía encriptado');
   }

// public function respuestaContacto(Request $request) {
//     $data = $request->all();
//     return response()->json([
//         'data' => $data
//     ], 202)->header('MI-TOKEN', 'cualquier cosa');
// }

//SE REDIRECCIONA HACIA EL INICIO

// public function respuestaContacto(Request $request) {
//     $data = $request->all();
//     return redirect()->route('inicio');
// }
 //SE REDIRECCIONA HACIA EL MIMSO CONTACTO
// public function respuestaContacto(Request $request) {
//     $data = $request->all();
//     return redirect()
//         ->route('contacto')
//         ->with('info', 'Mensaje enviado correctamente');
// }

public function respuestaContacto(Request $request) {
    $data = $request->all();
    return back()->with('info', 'Mensaje enviado correctamente');
}
    
}
