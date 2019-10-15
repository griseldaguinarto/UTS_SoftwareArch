<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kontak', 'Contact@index')->name('ContactIndex');
Route::get('/kontak/create', 'Contact@new_form')->name('ContactNewForm');
Route::post('/kontak', 'Contact@save')->name('ContactCreate'); 
Route::get('/kontak/delete/{id}', 'Contact@delete')->name('ContactDelete'); 
Route::get('/kontak/edit/{id}', 'Contact@edit')->name('ContactEditForm'); 
Route::post('/kontak/edit/{id}', 'Contact@update')->name('ContactUpdate'); 
Route::get('/kontak/filter', 'Contact@filter_data')->name('ContactFilter');
