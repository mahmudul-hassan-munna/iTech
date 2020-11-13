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

Route::get('/i-m-funny', 'TestController@iMFunny');
Route::get('/second-buyer-eloquent', 'TestController@secondBuyerEloquent');
Route::get('/purchase-list-eloquent', 'TestController@purchaseList');
Route::get('/record-transfer', 'TestController@recordTransfer');

Route::get('/define-callback-js', 'TestController@defineCallbackJs');

Route::get('/sort-js', 'TestController@sortJs');
Route::get('/foreach-js', 'TestController@foreachJs');
Route::get('/filter-js', 'TestController@filterJs');
Route::get('/map-js', 'TestController@mapJs');
Route::get('/reduce-js', 'TestController@reduceJs');
Route::get('/animation', 'TestController@animation');







