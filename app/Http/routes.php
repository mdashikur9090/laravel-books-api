<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/api/v1/books/{id?}', 'Books@index');
Route::post('/api/v1/books', 'Books@store');
Route::post('/api/v1/books/{id}', 'Books@update');
Route::delete('/api/v1/books/{id}', 'Books@destroy');

/**
 * Route::get('/api/v1/books', array('middleware' => 'cors', 'uses' => 'Books@index'));
 * Route::post('/api/v1/books/{id}', array('middleware' => 'cors', 'uses' => 'Books@store'));
 * Route::post('/api/v1/books/{id}', array('middleware' => 'cors', 'uses' => 'Books@update'));
 * Route::delete('/api/v1/books/{id}', array('middleware' => 'cors', 'uses' => 'Books@destroy'));
 */