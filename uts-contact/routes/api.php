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

Route::get('/kontak', 'Api\Contact@index'); 
Route::get('/kontak/{id}', 'Api\Contact@get'); 
Route::post('/kontak/create','Apo\Contact@create');
Route::put('/kontak/update/{id}','Apo\Contact@update');
Route::post('/kontak/delete/{id}','Apo\Contact@delete');
