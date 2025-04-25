<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumerosAmigosController extends Controller
{
    public function mostrarFormulario()
    {
        return view('numerosAmigos');
    }
    public function verificarNumerosAmigos(Request $request){
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $sum1 = 0;
        $sum2 = 0;

        for($i = 1; $i < $num1; $i++){
            if($num1 % $i == 0){
                $sum1 += $i;
            }
        }

        for($i = 1; $i < $num2; $i++){
            if($num2 % $i == 0){
                $sum2 += $i;
            }
        }

        $resultado = ($sum1 == $num2 && $sum2 == $num1) ? "Los números son amigos" : "Los números no son amigos";
        return view ('numerosAmigos', compact('resultado', 'num1', 'num2'));
    }
}
