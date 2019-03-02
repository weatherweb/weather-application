<?php

namespace App\Http\Controllers;

use App\City;
use Cmfcmf\OpenWeatherMap;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    private $cities;
    private $apiKey;

    /**
     * WeatherController constructor.
     */
    public function __construct()
    {
        $this->cities = City::all();
        $apiKey = "f3fcf84fde7b0972497caa7111cabec9";//env('WEATHER_API_KEY',false);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $cities = $this->cities;
        return view('weather.current-weather', compact('cities'));
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

    public function getCurrentWeather(Request $request)
    {
        try {
            $cityName = $request->input('cityName');
            $zipCode = $request->input('zipCode');
            echo $cityName . " " . $zipCode;
            $lang = 'en';
            $units = 'metric';
            $owm = new OpenWeatherMap();
            $owm->setApiKey("f3fcf84fde7b0972497caa7111cabec9");
            //$weather = $owm->getRawWeatherData($cityName, $units, $lang, null, 'json');
            $weather = $owm->getWeather($cityName, $units, $lang);
            return response()->json($weather);
        } catch (\Exception $ex) {
            return response()->json('Error : ' . $ex->getMessage(), 200);
        }
    }

    // Function using darksky support

    public function getByCoordinates(Request $request)
    {
        $longitude = $request->input('longitude');
        $latitude = $request->input('latitude');
        $query = $latitude;
        $query .= ",-";
        $query .= $longitude;
        $api_url = "https://api.darksky.net/forecast/8ddb46ea258fd1ce4d6b6f84e1c37f78/" . $query;

        $fore = json_decode(file_get_contents($api_url));

        return response()->json($fore);
    }

    public function getForecast(Request $request)
    {
        try {
            return response()->json($this->apiKey, 200);
            //$w = $owm->getWeatherForecast('karachi', $units, $lang);
        } catch (\Exception $e) {
            return response()->json("error", 200);
        }
    }


    public function getHumidity(Request $request)
    {
        try {

        } catch (\Exception $e) {
            return response()->json("error", 200);
        }
    }

    public function getCurrentTemperatureByCityId(Request $request)
    {
        try {
            //$weather = $owm->getWeather(2172797, $units, $lang);

        } catch (\Exception $e) {
            return response()->json("error", 200);
        }
    }

    public function getCurrentTemperatureByLattitudeAndLongnitue(Request $request)
    {
        try {
            // Weather using lat and long
            //$weather = $owm->getWeather(array('lat' => 77.73038, 'lon' => 41.89604), $units, $lang);
        } catch (\Exception $e) {
            return response()->json("error", 200);
        }
    }

    public function getInformationAboutCity(Request $request)
    {

        try {

            /*$weather = $owm->getWeather('Paris', $units, $lang);
           echo 'Id: '.$weather->city->id;
           echo 'Name: '.$weather->city->name;
           echo 'Lon: '.$weather->city->lon;
           echo 'Lat: '.$weather->city->lat;
           echo 'Country: '.$weather->city->country;*/

        } catch (\Exception $e) {
            return response()->json("error", 200);
        }
    }

    public function getWeatherRawData(Request $request)
    {
        try {
            // Returns all data
            //$json = $owm->getRawWeatherData('Berlin', $units, $lang, null, 'json');

        } catch (\Exception $e) {
            return response()->json("error", 200);
        }
    }


}
