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
Route::get('/', 'TopController@index')->name('top');
// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::prefix('user')->name('user.')->group(function() {
    // Route::get('{user}/items', 'UserController@index')->middleware('can:index, App\Item')->name('items.index');
    // Route::get('{user}/items', 'UserController@index')->middleware('can:view, App\User, user')->name('items.index');
    Route::get('{user}/items', 'UserController@index')->name('items.index');
});

Route::resource('items', 'ItemsController');

// Route::prefix('items')->name('items.')->middleware('auth')->group(function() {
//     // Route::get('/', 'ItemsController@index')->name('index');
//     Route::get('/create', 'ItemsController@create')->name('create');
//     Route::get('/{item}', 'ItemsController@show')->name('show');
//     Route::post('/', 'ItemsController@store')->name('store');
//     // Route::get('/{item}', 'ItemsController@show')->name('show');
//     Route::get('/{item}/edit', 'ItemsController@edit')->name('edit');
//     Route::put('/{item}', 'ItemsController@update')->name('update');
//     Route::delete('/{item}', 'ItemsController@destroy')->name('destroy');
// });

Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.twitter');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::fallback(function() {
    // return redirect()->route('user.items.index',['user'=>auth()->user()]);
    return redirect()->route('top');
});