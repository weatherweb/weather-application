<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    //
    private $id;
    private $longitude;
    private $lattitude;
    private $main;
    private $description;
    private $temp;
    private $pressure;
    private $humidity;
    private $temp_min;
    private $temp_max;
    private $visibility;
    private $wind_speed;
    private $deg;
    private $country;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLattitude()
    {
        return $this->lattitude;
    }

    /**
     * @param mixed $lattitude
     */
    public function setLattitude($lattitude)
    {
        $this->lattitude = $lattitude;
    }

    /**
     * @return mixed
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * @param mixed $main
     */
    public function setMain($main)
    {
        $this->main = $main;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * @param mixed $temp
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;
    }

    /**
     * @return mixed
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * @param mixed $pressure
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;
    }

    /**
     * @return mixed
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @param mixed $humidity
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;
    }

    /**
     * @return mixed
     */
    public function getTempMin()
    {
        return $this->temp_min;
    }

    /**
     * @param mixed $temp_min
     */
    public function setTempMin($temp_min)
    {
        $this->temp_min = $temp_min;
    }

    /**
     * @return mixed
     */
    public function getTempMax()
    {
        return $this->temp_max;
    }

    /**
     * @param mixed $temp_max
     */
    public function setTempMax($temp_max)
    {
        $this->temp_max = $temp_max;
    }

    /**
     * @return mixed
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param mixed $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    /**
     * @return mixed
     */
    public function getWindSpeed()
    {
        return $this->wind_speed;
    }

    /**
     * @param mixed $wind_speed
     */
    public function setWindSpeed($wind_speed)
    {
        $this->wind_speed = $wind_speed;
    }

    /**
     * @return mixed
     */
    public function getDeg()
    {
        return $this->deg;
    }

    /**
     * @param mixed $deg
     */
    public function setDeg($deg)
    {
        $this->deg = $deg;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

}
