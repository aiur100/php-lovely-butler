<?php

/**
 * Class WeatherFactory
 */
class WeatherFactory
{
    /**
     * @return Weather
     */
    public static function create(){
        $client = new GuzzleHttp\Client();
        return new Weather($client->request('GET', WEATHER_URL));
    }
}