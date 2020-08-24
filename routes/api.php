<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/test','Api\ProductController@index');
Route::post('/test1','Api\ProductController@add');
Route::post('/insert-all-to-db','Api\ProductController@getDataFromUrl')->name('api.insert-all-to-db');
Route::post('/get-all-elements','Api\ProductController@getAllElements')->name('api.get-all-elements');
Route::post('/get-all-elements-response','Api\ProductController@getAllElementsResponse')->name('api.get-all-elements-response');
Route::post('/delete','Api\Admin\AdminProductController@delete')->name('api.delete-element');//
Route::post('/add-row','Api\Admin\AdminProductController@add')->name('api.add-element');//
Route::post('/edit-row','Api\Admin\AdminProductController@update')->name('api.edit-element');//
