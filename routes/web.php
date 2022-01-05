<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');})->name('home');
Route::get('/', 'ClienteController@index')->name('cliente');

Route::prefix('cliente')->group(function(){

    Route::get('/', 'ClienteController@index');
    Route::get('/{id}', 'ClienteController@show');
    Route::get('/new', 'ClienteController@create');

    Route::post('/save', 'ClienteController@store');

    Route::put('/{id}', 'ClienteController@update');

    Route::delete('/{id}', 'ClienteController@delete');

});
