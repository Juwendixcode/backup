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

//tanaman
Route::get('/admin/tanaman', 'TanamanController@index');
Route::get('/admin/tanaman/{id}/edit', 'TanamanController@edit');
Route::get('/admin/tanaman/tambah', 'TanamanController@tambah');
Route::patch('/admin/tanaman/{id}/edit', 'TanamanController@update');
Route::post('/admin/tanaman/tambah', 'TanamanController@store');
Route::delete('/admin/tanaman/{id}/delete', 'TanamanController@destroy');

//pupuk
Route::get('/admin/pupuk', 'PupukController@index');
Route::get('/admin/pupuk/{id}/edit', 'PupukController@edit');
Route::get('/admin/pupuk/tambah', 'PupukController@tambah');
Route::patch('/admin/pupuk/{id}/edit', 'PupukController@update');
Route::post('/admin/pupuk/tambah', 'PupukController@store');
Route::delete('/admin/pupuk/{id}/delete', 'PupukController@destroy');

//home
Route::get('/', 'HomeController@index');
Route::get('/simulasi', 'HomeController@simulasi');
Route::get('/pupuk', 'HomeController@pupuk');
Route::get('/pupuk/{nama}','HomeController@detail');
Route::post('/simulasi', 'HomeController@hitung');
Route::get('/jajarlegowo', 'HomeController@jajarlegowo');
Route::get('/konvensional', 'HomeController@konvensional');

//admin
Route::get('/admin', 'AdminController@index');

// Authentication routes...
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');