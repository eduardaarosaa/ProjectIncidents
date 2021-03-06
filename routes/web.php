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

Route::resource('Incident', 'IncidentController');

Route::get('Incident','IncidentController@index')->name('Incident');

Route::delete('apagar/{id}', 'IncidentController@destroy');

Route::post('update/{id}', 'IncidentController@update')->name('update');