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
//Route::get('/user/{id}', 'ItemController@show');
Route::get('/items', 'ItemController@index');
Route::get('/items/{id}', 'ItemController@show');
Route::get('/create', 'ItemController@create');

// 以下 花屋さんによる参考
// Route::get('/top', 'TopController@index')->name('top')->middleware('auth');

// Route::group('aaa', function() {
//     Route...
//     Route...
// })->middleware(['auth', 'can:edit'])
