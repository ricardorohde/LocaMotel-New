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

// Página Inicial
Route::get('/', function () {
    return view('homepage');
});

Auth::routes();

// Rotas do Painel
Route::group(['prefix' => 'Painel', 'prefix' => 'painel'], function () {
    
    // Exibe o painel
    Route::get('/', 'HomeController@index')->name('painel');

    // Exibe os funcionários e as funções UPDATE, ADD e DELETE
    Route::get('/controlefuncionarios', 'FuncionarioController@index')->name('controlfuncionarios');
    Route::put('/controlefuncionarios/update/{id}', 'FuncionarioController@update')->name('controlfuncionariosupdate');
    Route::get('/controlefuncionarios/addfuncionario', 'FuncionarioController@create')->name('controlfuncionarioadd');
    Route::post('/controlefuncionarios/addfuncionario/senddata', 'FuncionarioController@store')->name('controlfuncionarioadddata');
    Route::get('/controlefuncionarios/deletefuncionario/{id}', 'FuncionarioController@show')->name('controlfuncionariodel');
    Route::delete('/controlefuncionarios/deletefuncionario/{id}/deletar', 'FuncionarioController@destroy')->name('controlfuncionariodelete');

    // Exibe os quartos e as funções UPDATE, ADD e DELETE
    Route::get('/controlequartos', 'QuartoController@index')->name('indexquarto');
    //Route::put('/controlequartos/update/{id}', 'QuartoController@update')->name('updatequarto');
    //Route::get('/controlequartos/addfuncionario', 'QuartoController@create')->name('createquarto');
    //Route::post('/controlequartos/addfuncionario/senddata', 'QuartoController@store')->name('storequarto');
    //Route::get('/controlequartos/deletefuncionario/{id}', 'QuartoController@show')->name('showdeletequarto');
    //Route::delete('/controlequartos/deletequarto/{id}/deletar', 'QuartoController@destroy')->name('destroyquarto');

    // Exibe o contato dos Funcionários
    Route::get('/contatos', 'HomeController@contact')->name('contact');
});
