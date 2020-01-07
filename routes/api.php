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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login','LoginController@login');
Route::post('/register','LoginController@register');
Route::get('/index', 'UserController@index');
Route::put('/edit/{id}', 'UserController@edit');
Route::delete('/delet/{id}', 'UserController@delet');
