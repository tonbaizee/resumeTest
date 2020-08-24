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

Route::get('/','Api\ProductController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'Api\ProductController@index')->name('home')->middleware('auth');
Route::get('/insert-rows', 'HomeController@insertRows')->name('insert-rows')->middleware('auth');
Route::get('/edit-row/{slug}', 'HomeController@editRow')->name('edit-row')->middleware('admin');
Route::get('/add-row', 'HomeController@addRow')->name('add-row')->middleware('admin');
