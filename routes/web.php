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
Route::get('/admin', 'admin\PostController@index')->middleware('is_admin');;
Route::resource('admin/posts', 'PostController')->except('index');


Route::get('/contact', function () {
    return view('pages.contact');
});

//Route::get('/admin', function () {
//    return view('pages.admin');
//})->middleware('is_admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
