<?php

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



Route::get('/', 'HomeController@index')->name('home');
Route::get('/quantidade', 'HomeController@quantidade');
Route::get('/tema/{id}/{slug}', 'TemaController@show');
Route::post('/tema/{id}/{slug}', 'TemaController@adicionar_voto');

Route::prefix('painel')->group(function () {
    Route::get('/', 'Admin\PainelController@index');

    Route::get('adicionar-tema', 'Admin\TemaController@create');
    Route::post('adicionar-tema', 'Admin\TemaController@store');

    Route::get('meus-temas', 'Admin\TemaController@listar_por_usuario');

    Route::get('deletar-tema/{id}', 'Admin\TemaController@destroy');
    Route::get('listar-temas', 'Admin\TemaController@listar_temas');
    Route::get('listar-removidos', 'Admin\TemaController@listar_removidos');

    Route::get('ativar-tema/{id}', 'Admin\TemaController@ativar');
});
