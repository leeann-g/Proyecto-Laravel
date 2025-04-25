<?php

use App\Http\Controllers\CuadraticaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumerosAmigosController;
use App\Http\Controllers\SumaController;
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function(){
    return view('index');
});

Route::get('/cuadratica', [CuadraticaController::class, 'mostrarFormulario']);
Route::post('/cuadratica', [CuadraticaController::class, 'calcular'])->name('cuadratica');


Route::get('/numerosAmigos', [NumerosAmigosController::class, 'mostrarFormulario']);
Route::post('/numerosAmigos', [NumerosAmigosController::class, 'verificarNumerosAmigos'])-> name('numerosAmigos');

Route::get('/suma', [SumaController::class, 'pedirDatos']);
Route::post('/suma', [SumaController::class, 'suma'])->name('suma');
