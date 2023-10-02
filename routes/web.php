<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', function () 
{ return view('clientes'); 
});

Route::post('guardar', [ClientesController::class,'store'])->name('guardar') ;
Route::get('consulta', [ClientesController::class,'index'])->name('consulta') ;
Route::get('actualizar{id}', [ClientesController::class,'editar'])->name('actualizar');
Route::post('update{cliente}', [ClientesController::class,'update'])->name('update') ;
Route::delete('eliminar{id}', [ClientesController::class,'delete'])->name('eliminar');


