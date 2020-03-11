<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/addnew', 'HomeController@addnew')->name('addnew');
Route::post('/listuser', 'HomeController@storeuser')->name('store_user');
Route::get('/show', 'HomeController@show_user')->name('show_user');
Route::post('deleteregister', 'HomeController@delete_register')->name('delete_register');
Route::post('updateregister/{id}', 'HomeController@update_register')->name('update_register');
