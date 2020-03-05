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

Route::get('/', 'PostController@index');
Route::resource('posts', 'PostController')->except('index');

Route::middleware('is_admin')->group(function () {
    Route::get('/admin', 'admin\PostController@index');
    Route::resource('admin/posts', 'admin\PostController')->except('index');
});


Route::get('/search', 'PostController@search');

Route::get('/contact', function () {
    return view('pages.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
