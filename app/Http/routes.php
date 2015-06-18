<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/add', 'ProdutoController@add');
Route::post('/produtos/edit/{id}', 'ProdutoController@edit');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/edita/{id}', 'ProdutoController@edita');
Route::get('/produtos/mostrar/{id}', 'ProdutoController@mostrar')->where('id', '[0-9]+');
