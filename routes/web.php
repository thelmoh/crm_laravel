<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('layouts.app'); })->name('index');

Route::get('/clientes', 'App\Http\Controllers\ClienteController@index')->name('clientes.index');
Route::get('/clientes/novo', 'App\Http\Controllers\ClienteController@create')->name('clientes.novo');
Route::post('/clientes', 'App\Http\Controllers\ClienteController@store')->name('clientes.store');
Route::get('/clientes/{id}/editar', 'App\Http\Controllers\ClienteController@edit')->name('clientes.editar');
Route::put('/clientes/{id}/update', 'App\Http\Controllers\ClienteController@update')->name('clientes.update');
Route::delete('/clientes/{id}/delete', 'App\Http\Controllers\ClienteController@destroy')->name('clientes.apagar');

Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index')->name('produtos.index');
Route::get('/produtos/novo', 'App\Http\Controllers\ProdutoController@create')->name('produtos.novo');
Route::post('/produtos', 'App\Http\Controllers\ProdutoController@store')->name('produtos.store');
Route::get('/produtos/{id}/editar', 'App\Http\Controllers\ProdutoController@edit')->name('produtos.editar');
Route::put('/produtos/{id}/update', 'App\Http\Controllers\ProdutoController@update')->name('produtos.update');
Route::delete('/produtos/{id}/delete', 'App\Http\Controllers\ProdutoController@destroy')->name('produtos.apagar');

Route::get('/contratos/{clienteId}', 'App\Http\Controllers\ContratoController@index')->name('contratos.index');
Route::get('/contratos/{clienteId}/novo', 'App\Http\Controllers\ContratoController@create')->name('contratos.novo');
Route::post('/contratos', 'App\Http\Controllers\ContratoController@store')->name('contratos.store');
Route::get('/contratos/{id}/editar', 'App\Http\Controllers\ContratoController@edit')->name('contratos.editar');
Route::put('/contratos/{id}/update', 'App\Http\Controllers\ContratoController@update')->name('contratos.update');
Route::delete('/contratos/{id}/delete', 'App\Http\Controllers\ContratoController@destroy')->name('contratos.apagar');

Route::get('/contatos/{clienteId}', 'App\Http\Controllers\ContatoController@index')->name('contatos.index');
Route::get('/contatos/{clienteId}/novo', 'App\Http\Controllers\ContatoController@create')->name('contatos.novo');
Route::post('/contatos', 'App\Http\Controllers\ContatoController@store')->name('contatos.store');
Route::get('/contatos/{id}/editar', 'App\Http\Controllers\ContatoController@edit')->name('contatos.editar');
Route::put('/contatos/{id}/update', 'App\Http\Controllers\ContatoController@update')->name('contatos.update');
Route::delete('/contatos/{id}/delete', 'App\Http\Controllers\ContatoController@destroy')->name('contatos.apagar');
