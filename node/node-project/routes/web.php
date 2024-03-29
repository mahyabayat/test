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
    return view('auth.login');
});

Auth::routes();

Route::get('/p/create','PostsController@create');
Route::post('/p', 'PostsController@store');


Route::get('/home', 'ProfilesController@show')->name('home');
Route::get('/profile/{user}', 'ProfilesController@show')->name('profile.show');