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

Route::post('login', 'Youtube@login');
Route::any('register', 'Youtube@register');
Route::get('list', 'ProductsController@list');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('details', 'Youtube@details');
    Route::post('product', 'ProductsController@store');
    Route::put('product', 'ProductsController@update');
});