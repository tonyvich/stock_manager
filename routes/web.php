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

// Display items
Route::get('/items', 'ItemController@index');

// Display Add items view
Route::get('/items/add', 'ItemController@create');

// Display one item
Route::get('/items/{item}', 'ItemController@show');

// Save new item
Route::post('/items', 'ItemController@store');

// Display delivery add
Route::get('/deliveries/add/{item}', 'DeliveryController@create');

// Store a delivery
Route::post('/deliveries/{item}', 'DeliveryController@store');
Auth::routes();

Route::get('/home', 'ItemController@index')->name('home');
