<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuadraticaController extends Controller
{
    public function mostrarFormulario(){
        return view('cuadratica');
    }
    public function calcular(Request $request){
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');

        $discriminante = ($b * $b) - (4 * $a * $c);
        if($discriminante < 0){
            $mensaje = "No hay soluciones reales";
            return view ('cuadratica', compact('mensaje'));
        }
        else{
            $raiz1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $raiz2 = (-$b - sqrt($discriminante)) / (2 * $a);
            return view('cuadratica', compact('raiz1', 'raiz2', 'a', 'b', 'c'));
        }
    }
}
