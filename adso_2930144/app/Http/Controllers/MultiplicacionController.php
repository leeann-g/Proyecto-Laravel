<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicacionController extends Controller
{
    public function mostrarFormulario(){
        return view ('multiplicacion');
    }

    public function multiplicacion(Request $request){
        $a = $request ->input('a');
        $b = $request ->input('b');

        $resultado = $a * $b;
        return view('multiplicacion', compact('restultado','a','b'));
    }
}
