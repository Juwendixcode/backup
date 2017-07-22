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
    return view('web');
});

// Route::get('/store', function () {
//     return view('store');
// });

Auth::routes();

Route::get('/admpanel', 'HomeController@index')->name('admpanel');
Route::get('/store', 'UserController@store')->name('store');