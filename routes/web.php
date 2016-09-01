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

Route::get('/', function () {
    return view('index');
});
//Route::get('dipu', 'Employees@v');
Route::get('/employees/{id?}', 'Employees@index');
Route::post('/employees', 'Employees@store');
Route::post('/employees/{id}', 'Employees@update');
Route::delete('/employees/{id}', 'Employees@destroy');
