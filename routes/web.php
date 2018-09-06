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

