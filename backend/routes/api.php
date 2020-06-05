<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/acara','AcaraController@all');
Route::get('/acara/{id}','AcaraController@show');
Route::post('/acara','AcaraController@store');
Route::put('/acara/{id}','AcaraController@update');
Route::delete('/acara/{id}','AcaraController@delete');
