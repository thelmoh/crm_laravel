<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('index')->middleware('auth');

    Route::middleware('usuario_ativo')->group(function() {
        Route::get('/clientes', 'App\Http\Controllers\ClienteController@index')->name('clientes.index')->middleware('auth');
        Route::get('/clientes/novo', 'App\Http\Controllers\ClienteController@create')->name('clientes.novo')->middleware('auth');
        Route::post('/clientes', 'App\Http\Controllers\ClienteController@store')->name('clientes.store')->middleware('auth');
        Route::get('/clientes/{id}/editar', 'App\Http\Controllers\ClienteController@edit')->name('clientes.editar')->middleware('auth');
        Route::put('/clientes/{id}/update', 'App\Http\Controllers\ClienteController@update')->name('clientes.update')->middleware('auth');
        Route::delete('/clientes/{id}/delete', 'App\Http\Controllers\ClienteController@destroy')->name('clientes.apagar')->middleware('auth');
        
        Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index')->name('produtos.index')->middleware('auth');
        Route::get('/produtos/novo', 'App\Http\Controllers\ProdutoController@create')->name('produtos.novo')->middleware('auth');
        Route::post('/produtos', 'App\Http\Controllers\ProdutoController@store')->name('produtos.store')->middleware('auth');
        Route::get('/produtos/{id}/editar', 'App\Http\Controllers\ProdutoController@edit')->name('produtos.editar')->middleware('auth');
        Route::put('/produtos/{id}/update', 'App\Http\Controllers\ProdutoController@update')->name('produtos.update')->middleware('auth');
        Route::delete('/produtos/{id}/delete', 'App\Http\Controllers\ProdutoController@destroy')->name('produtos.apagar')->middleware('auth');
        
        Route::get('/contratos/{clienteId}', 'App\Http\Controllers\ContratoController@index')->name('contratos.index')->middleware('auth');
        Route::get('/contratos/{clienteId}/novo', 'App\Http\Controllers\ContratoController@create')->name('contratos.novo')->middleware('auth');
        Route::get('/contratos/{id}/detalhar', 'App\Http\Controllers\ContratoController@show')->name('contratos.show')->middleware('auth');
        Route::post('/contratos', 'App\Http\Controllers\ContratoController@store')->name('contratos.store')->middleware('auth');
        Route::get('/contratos/{id}/editar', 'App\Http\Controllers\ContratoController@edit')->name('contratos.editar')->middleware('auth');
        Route::put('/contratos/{id}/update', 'App\Http\Controllers\ContratoController@update')->name('contratos.update')->middleware('auth');
        Route::delete('/contratos/{id}/delete', 'App\Http\Controllers\ContratoController@destroy')->name('contratos.apagar')->middleware('auth');
        
        Route::get('/contatos/{clienteId}', 'App\Http\Controllers\ContatoController@index')->name('contatos.index')->middleware('auth');
        Route::get('/contatos/{clienteId}/novo', 'App\Http\Controllers\ContatoController@create')->name('contatos.novo')->middleware('auth');
        Route::post('/contatos', 'App\Http\Controllers\ContatoController@store')->name('contatos.store')->middleware('auth');
        Route::get('/contatos/{id}/editar', 'App\Http\Controllers\ContatoController@edit')->name('contatos.editar')->middleware('auth');
        Route::put('/contatos/{id}/update', 'App\Http\Controllers\ContatoController@update')->name('contatos.update')->middleware('auth');
        Route::delete('/contatos/{id}/delete', 'App\Http\Controllers\ContatoController@destroy')->name('contatos.apagar')->middleware('auth');
        
        Route::get('/observacoes/{contratoId}', 'App\Http\Controllers\ObservacaoController@index')->name('observacoes.index')->middleware('auth');
        Route::get('/observacoes/{contratoId}/novo', 'App\Http\Controllers\ObservacaoController@create')->name('observacoes.novo')->middleware('auth');
        Route::post('/observacoes', 'App\Http\Controllers\ObservacaoController@store')->name('observacoes.store')->middleware('auth');
        Route::get('/observacoes/{id}/editar', 'App\Http\Controllers\ObservacaoController@edit')->name('observacoes.editar')->middleware('auth');
        Route::put('/observacoes/{id}/update', 'App\Http\Controllers\ObservacaoController@update')->name('observacoes.update')->middleware('auth');
        Route::delete('/observacoes/{id}/delete', 'App\Http\Controllers\ObservacaoController@destroy')->name('observacoes.apagar')->middleware('auth');
        
        Route::get('/produtos_contratos/{contratoId}/novo', 'App\Http\Controllers\ProdutoContratoController@create')->name('produtos_contratos.create')->middleware('auth');
        Route::post('/produtos_contratos', 'App\Http\Controllers\ProdutoContratoController@store')->name('produtos_contratos.store')->middleware('auth');
        Route::delete('/produtos_contratos/{id}/delete', 'App\Http\Controllers\ProdutoContratoController@destroy')->name('produtos_contratos.apagar')->middleware('auth');
    });

    Route::middleware('admin')->group(function() {
        Route::get('/users', 'App\Http\Controllers\UserController@index')->name('usuarios.index')->middleware('auth');
        Route::post('/user/{id}/ativar', 'App\Http\Controllers\UserController@ativar')->name('usuario.ativar')->middleware('auth');
        Route::post('/user/{id}/desativar', 'App\Http\Controllers\UserController@desativar')->name('usuario.desativar')->middleware('auth');
    });

Auth::routes();
