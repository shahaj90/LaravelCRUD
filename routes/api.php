<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
Route::get('/api/v1/employees/{id?}', 'Employees@index')->middleware('auth:api');
Route::post('/api/v1/employees', 'Employees@store')->middleware('auth:api');
Route::post('/api/v1/employees/{id}', 'Employees@update')->middleware('auth:api');
Route::delete('/api/v1/employees/{id}', 'Employees@destroy')->middleware('auth:api');

