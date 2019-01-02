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

Route::get('/order/{id}','Order\OrderController@aaa');
Route::get('add','Order\OrderController@add');
Route::get('update/{id}','Order\OrderController@update');
Route::get('delete/{id}','Order\OrderController@delete');
Route::get('select','Order\OrderController@select');

