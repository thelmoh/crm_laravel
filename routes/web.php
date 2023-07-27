<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('layouts.app'); })->name('index');
Route::get('/clientes', 'App\Http\Controllers\ClienteController@index')->name('clientes.index');
Route::get('/clientes/novo', 'App\Http\Controllers\ClienteController@create')->name('clientes.novo');
Route::post('/clientes', 'App\Http\Controllers\ClienteController@store')->name('clientes.store');
Route::get('/clientes/{id}/editar', 'App\Http\Controllers\ClienteController@edit')->name('clientes.editar');
Route::put('/clientes/{id}/update', 'App\Http\Controllers\ClienteController@update')->name('clientes.update');
Route::delete('/clientes/{id}/delete', 'App\Http\Controllers\ClienteController@destroy')->name('clientes.apagar');