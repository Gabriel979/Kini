<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



//Route::get('/', 'FrontController@index');

Route::get('/', 'NumberController@index');

Route::get('inicio', 'NumberController@index');

//Route::get('cargar','FrontController@carga');

Route::get('cargar','NumberController@create');

Route::post('cargar/store', 'NumberController@store');

Route::get('sorteos-anteriores/{fecha}','FrontController@sorteos');

//Route::get('estadisticas','FrontController@showStatis');

Route::get('estadisticas','StatisticsController@index');

Route::get('numeros-suenos','FrontController@numerosSignificados');

Route::get('numeros-profesiones','FrontController@profesiones');

Route::get('numeros-animales','FrontController@animales');

Route::get('numeros-futbol','FrontController@futbol');

Route::get('numeros-nombres','FrontController@nombres');