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

Route::get('/create', function () {
    return view('create');
});

Route::get('/edit_file', function () {
    return view('edit_file');
});

Route::get('/upload_file', function () {
    return view('upload_file');
});

Route::get('/view_files', function () {
    return view('view_files');
});

Route::get('/user_lists', function () {
    return view('user_lists');
});

Route::get('/inactive_users', function () {
    return view('inactive_users');
});

Route::get('/archives', function () {
    return view('archives');
});

Route::get('/completed', function () {
    return view('completed');
});

Route::get('/passwords', function () {
    return view('passwords');
});

Route::get('/profile', function () {
    return view('profile');
});
