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

Route::get('/weather/', function () {
    return view('weather.index');
});

Route::get('/weather/contact', function () {
    return view('weather.contact');
});

Route::get('/weather/news', function () {
    return view('weather.news');
});

Route::get('/weather/login', function () {
    return view('weather.index');
});
Route::get('blade', function () {
    return view('child');
});