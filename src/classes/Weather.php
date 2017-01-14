<?php

/**
 * Class Weather
 */
class Weather
{
    protected $WeatherApiResponse;

    /**
     * Weather constructor.
     * @param \GuzzleHttp\Psr7\Response $ApiResponse
     */
    public function __construct(GuzzleHttp\Psr7\Response $ApiResponse)
    {
        $this->WeatherApiResponse = $ApiResponse;
    }

    /**
     * @return \GuzzleHttp\Psr7\Response
     */
    public function getApiResponse(){
        return $this->WeatherApiResponse;
    }
}