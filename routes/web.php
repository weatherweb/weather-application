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
    return view('weather.index');
});

Route::get('/weather/', 'WeatherController@index');

Route::get('/weather/current/', function () {
    return view('weather.current-weather');
});

Route::get('/weather/daily/', function () {
    return view('weather.daily-weather');
});

Route::get('/weather/hourly/', function () {
    return view('weather.hourly-weather');
});

Route::get('/weather/current/getCurrent', 'WeatherController@getByCoordinates');

Route::get('/weather/hourly/getHourly', 'WeatherController@getByCoordinates');

Route::get('/weather/daily/getDaily', 'WeatherController@getByCoordinates');