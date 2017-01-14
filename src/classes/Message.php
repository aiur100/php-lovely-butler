<?php

/**
 * Class Message
 *
 * handles getting string messages formatted in a manner
 * that the Butler can say them.
 *
 */
class Message
{
    /**
     * @return string
     */
    public static function getTime(){
        return "The time is " . date("h:i:sa");
    }

    /**
     * return currentTemp
     */
    public static function getCurrentTemp(){
        $weather        = WeatherFactory::create();
        $weatherData    = \GuzzleHttp\json_decode($weather->getApiResponse()->getBody(),true);
        return "The temperature is ".$weatherData['currently']['temperature']." degrees";
    }

    public static function getWeekForecast(){
        $weather        = WeatherFactory::create();
        $weatherData    = \GuzzleHttp\json_decode($weather->getApiResponse()->getBody(),true);
        return "This week the weather will consist of ".$weatherData['daily']['summary'];
    }
}