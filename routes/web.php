<?php

use App\Http\Controllers\CidadesController;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//HOME PAGE
Route::view('/', 'index');

//ESTADOS
Route::get('/estados/novo', [EstadosController::class, 'create']);
Route::post('/estados/novo', [EstadosController::class, 'store'])->name('inserir_estado');

Route::get('estado/{id}', [EstadosController::class, 'show']);
Route::get('/estados', [EstadosController::class, 'index']);

Route::get('/estado/editar/{id}', [EstadosController::class, 'edit']);
Route::post('/estado/{id}', [EstadosController::class, 'update'])->name('alterar_estado');

Route::get('/estado/excluir/{id}', [EstadosController::class, 'delete']);
Route::post('/estado/excluir/{id}', [EstadosController::class, 'destroy'])->name('excluir_estado');

//CIDADES
Route::get('/cidades/novo', [CidadesController::class, 'create']);
Route::post('/cidades/novo', [CidadesController::class, 'store'])->name('inserir_cidade');

Route::get('cidade/{id}', [CidadesController::class, 'show']);
Route::get('/cidades', [CidadesController::class, 'index']);

Route::get('/cidade/editar/{id}', [CidadesController::class, 'edit']);
Route::post('/cidade/{id}', [CidadesController::class, 'update'])->name('alterar_cidade');

Route::get('/cidade/excluir/{id}', [CidadesController::class, 'delete']);
Route::post('/cidade/excluir/{id}', [CidadesController::class, 'destroy'])->name('excluir_cidade');
