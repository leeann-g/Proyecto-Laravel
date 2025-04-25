<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function pedirDatos(){
        return view('suma');
    }
    public function suma(Request  $request){
        $a = $request -> input('a');
        $b = $request -> input('b');
        $suma = $a + $b;
        $yei = ' - . / --.- ..- .. . .-. --- / -- ..- -.-. .... ..-/ -. . --. .-. .. - ---';
        return view('suma', compact('suma','a','b','yei' ));
    }
}
