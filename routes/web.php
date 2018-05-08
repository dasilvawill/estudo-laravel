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

Route::group(['prefix' => 'will'], function() {

    Route::get('/', function () {
        return "Método GET.";
    });

    Route::get('/bar', function () {
        return view('foo.bar');
    });

    Route::get('/bar/form', function () {
       return view('foo.form');
    });
});

Route::group(['prefix' => 'user'], function() {
   Route::get('/', function () {
       $users = ['William', 'Matheus', 'Guilherme'];

       return view('user.index', compact('users'));
   });
   Route::get('{id}', function ($id) {
       return view('user.show', compact('id'));
   });
});

