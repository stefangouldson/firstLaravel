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

Route::get('/','PagesController@index')->name('pages/index');
Route::get('/welcome','PagesController@welcome');

Route::get('/about', 'PagesController@about')->name('pages/about');

Route::get('/users','PagesController@users')->name('pages/users');

Route::get('/user/{name}', function ($name) {
    return "<h1>The current user is {$name}</h1>";
});

Route::resource('posts', 'PostsController');
