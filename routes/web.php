<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ContactController@index');
Route::post('/store', 'ContactController@store');
Route::get('/edit/{id}', 'ContactController@edit');
Route::post('/update/{contact}', 'ContactController@update');
Route::get('/delete/{id}','ContactController@destroy') ;