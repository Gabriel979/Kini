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

Route::get('sorteos-anteriores','FrontController@sorteos');

//Route::get('estadisticas','FrontController@showStatis');

Route::get('estadisticas','StatisticsController@index');


