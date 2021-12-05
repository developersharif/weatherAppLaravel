<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        try {
            $api = file_get_contents('http://api.weatherapi.com/v1/current.json?key=5af68779e008475aaa554925210512&q=laksam&aqi=no');
            $api = json_decode($api);
            return view("weather", ['data' => $api]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function search_weather(Request $request)
    {
        try {
            $city = $request->city;
            $api = file_get_contents("http://api.weatherapi.com/v1/current.json?key=5af68779e008475aaa554925210512&q={$city}&aqi=no");
            $api = json_decode($api);
            return view("weather", ['data' => $api]);
        } catch (\Throwable $th) {
            return redirect("/");
        }
    }
}