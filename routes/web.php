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

Route::group(['prefix' => 'home'], function() {

    Route::get('/', function () {
        return "Método GET!.";
    });

    Route::get('/bar', function () {
        return view('foo.bar');
    });

    Route::get('/bar/form', function () {
       return view('foo.form');
    });
});

Route::group(['prefix' => 'user'], function() {
   Route::get('/', ['uses' => 'UserController@index']);

   Route::get('{id}', ['uses' => 'UserController@show']);

   Route::get('add', ['uses' => 'UserController@create']);

   Route::post('add', ['uses' => 'UserController@post']);
});
