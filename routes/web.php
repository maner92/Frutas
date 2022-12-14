<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutitasC;
use App\Http\Controllers\Paginas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Paginas::class, 'fhome'])->name('NHome');
Route::get('/crear', [Paginas::class, 'fingresar'])->name('Ncrear');

Route::post('/guardarRecuerdo', [Paginas::class, 'procesarRecuerdos'])->name('NProcesar');

//Función de Create
Route::get('/fruta/create', [FrutitasC::class, 'create'])->name('fruta.create');

//Función de Store para guardar/insertar datos a la bd
Route::post('/fruta', [FrutitasC::class, 'store'])->name('fruta.store');

//Función index para procesar la vista de consulta
Route::get('/fruta', [FrutitasC::class, 'index'])->name('fruta.index');

//Función para mostrar un registro filtrado
Route::get('/fruta/{id}/edit', [FrutitasC::class, 'edit'])->name('fruta.edit');

//Función update para editar el registro seleccionado
Route::put('/fruta/{id}', [FrutitasC::class, 'update'])->name('fruta.update');

//Función confirm para mostrar un registro a eliminar
Route::get('/fruta/{id}/confirm', [FrutitasC::class, 'confirm'])->name('fruta.confirm');

//Función para eliminar
Route::delete('/fruta/{id}', [FrutitasC::class, 'destroy'])->name('fruta.destroy');
