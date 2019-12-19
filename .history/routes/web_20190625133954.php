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
    return view('index');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/home/test', function () {
    return view('test');
});
Route::get('/ravi', function () {
    return view('indexRavi');
});

Route::get('/home/gallery/image', function () {
    return view('images');
});
Route::get('/scroll', 'HomeController@scroll');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
