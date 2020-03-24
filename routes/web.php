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

Route::get('/', 'CountriesController@index')->name('index');

Route::get('/{name}', 'CountriesController@countries')->name('country');

Route::get('/form/countries', 'databaseController@index')->name('countries-form');

Route::post('/form/countries-update', 'databaseController@update')->name('countries-update');

Route::post('/form/countries-insert', 'databaseController@insert')->name('countries-insert');

Route::post('/form/countries-delete', 'databaseController@delete')->name('countries-delete');