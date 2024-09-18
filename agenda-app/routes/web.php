<?php

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

// O uso da / é a localização da pagina welcome, ou seja, ao colocar / na URL, ira para pagina informada
Route::get('/', function () {
    return view('paginas/index');
});

//Caminho da pagina cadastrar é /cadastrar
Route::get('/cadastrar', function (){
    return view('paginas/cadastrar');
});

Route::get('/consultar', function(){
    return view('paginas/consultar');
});

Route::get('/atualizar', function(){
    return view('paginas/atualizar');
});

Route::get('/excluir', function(){
    return view('paginas/excluir');
});

Route::get('/editar', function(){
    return view('paginas/editar');
});


//As rotas utilizando o padrão MVC
Route::get('/cadastrar',[\App\Http\Controllers\registrarAtividadeController::class, 'index']); //Indo para classe controler e executando o método index

Route::get('/cadastrar/salvar',[\App\Http\Controllers\registrarAtividadeController::class, 'store']);

Route::get('/consultar', [\App\Http\Controllers\registrarAtividadeController::class, 'consultar']);

// id do banco de dados
Route::get('/editar/{id}',[\App\Http\Controllers\registrarAtividadeController::class, 'editar']);

Route::get('/atualizar/{id}', [\App\Http\Controllers\registrarAtividadeController::class, 'atualizar']);

Route::get('/excluir/{id}', [\App\Http\Controllers\registrarAtividadeController::class, 'excluir']);