<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');});
Route::get('/', 'ClienteController@index')->name('cliente');

Route::prefix('cliente')->group(function(){
    Route::get('/', 'ClienteController@index')->name('welcome');;
    Route::get('/{id}', 'ClienteController@show')->where('id', '[0-9]+');
    Route::get('/new', 'ClienteController@create');

    Route::post('/save', 'ClienteController@store');

    Route::get('/edit/{id}', 'ClienteController@edit')->where('id', '[0-9]+');
    Route::post('/update/{id}', 'ClienteController@update')->where('id', '[0-9]+');

    Route::delete('/delete/{id}', 'ClienteController@delete')->where('id', '[0-9]+');
});

Route::prefix('contato')->group(function(){
    Route::get('/list', 'ContatoController@index')->name('contato.list');
    Route::get('/new', 'ContatoController@create');

    Route::post('/save', 'ContatoController@store');
    Route::delete('/delete/{id}', 'ContatoController@delete')->where('id', '[0-9]+');
});
