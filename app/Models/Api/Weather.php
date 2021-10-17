<?php

namespace App\Models\Api;

use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;

class Weather extends Controller
{
    public function averageTemperature(string $city, string $countryCode)
    {
        $temperature1  = $this->openWeatherApi($city, $countryCode)->main->temp;
        $temperature2  = $this->weatherApi($city, $countryCode)->current->temp_c;
        $temperature   = ($temperature1 + $temperature2)/2;

        return $temperature;
    }

    private function openWeatherApi(string $city, string $countryCode) {
        $apiKey     = '655e05ee837ff13daee673b77b06b991';
        $units      = 'Metric';
        $response   = Curl::to("https://api.openweathermap.org/data/2.5/weather?q=$city,$countryCode&units=$units&appid=$apiKey")->get();

        $responseDecode = json_decode($response);

        return $responseDecode;
    }

    private function weatherApi(string $city, string $countryCode) {
        $apiKey     = 'c75b549e86374de5b9554531211710';
        $response   = Curl::to("http://api.weatherapi.com/v1/current.json?key=$apiKey&q=$city&aqi=no")->get();

        $responseDecode = json_decode($response);

        return $responseDecode;
    }




}
