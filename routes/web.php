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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/success', 'HomeController@success')->name('success');
Route::post('/danger', 'HomeController@danger')->name('danger');
Route::post('/warning', 'HomeController@warning')->name('warning');
Route::post('/info', 'HomeController@info')->name('info');
