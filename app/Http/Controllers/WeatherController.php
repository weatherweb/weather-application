<?php

namespace App\Http\Controllers;

use Cmfcmf\OpenWeatherMap;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCurrentWeather()
    {
        try {
            $myApiKey = 'f3fcf84fde7b0972497caa7111cabec9';
            $lang = 'en';
            $units = 'metric';
            $owm = new OpenWeatherMap();
            $owm->setApiKey($myApiKey);
            //$w = $owm->getWeatherForecast('karachi', $units, $lang);
            $weather = $owm->getWeather('london', $units, $lang);

            // Weather using lat and long
            //$weather = $owm->getWeather(array('lat' => 77.73038, 'lon' => 41.89604), $units, $lang);

            $currentTemp = $weather->temperature->now;
            $maxTemp = $weather->temperature->max;
            $minTemp = $weather->temperature->min;
            $pressure = $weather->pressure;
            $humidity = $weather->humidity;
            // Example 5: Get current temperature from city id. The city is an internal id used by OpenWeatherMap. See example 6 too.
            //$weather = $owm->getWeather(2172797, $units, $lang);
            // Example 5.1: Get current temperature from zip code (Hyderabad, India).

            // Example 6: Get information about a city.
            /*$weather = $owm->getWeather('Paris', $units, $lang);
            echo 'Id: '.$weather->city->id;
            echo 'Name: '.$weather->city->name;
            echo 'Lon: '.$weather->city->lon;
            echo 'Lat: '.$weather->city->lat;
            echo 'Country: '.$weather->city->country;*/
            // Returns all data
            $json = $owm->getRawWeatherData('Berlin', $units, $lang, null, 'json');

            $weather = $owm->getWeather('zip:500001,IN', $units, $lang);

            return response()->json($weather, 200);
        } catch (\Exception $ex) {
            return response()->json('Error : ' . $ex->getMessage(), 200);
        }
    }

}
