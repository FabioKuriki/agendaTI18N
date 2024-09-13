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