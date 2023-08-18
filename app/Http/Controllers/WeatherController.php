<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Services\WeatherService;
use App\Http\Controllers\Controller;
use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Support\Facades\Validator;

class WeatherController extends Controller
{
    public function weatherView(Request $request)
    {
        return view('weather.view');
    }

    public function showWeather(Request $request, OpenWeather $openWeather)
    {
        $request->validate([
            'city' => 'required|alpha:ascii',
        ]);

        $weatherData = $openWeather->getCurrentWeatherByCityName($request->city, "metric");
        if ($weatherData) {
            $weatherData['datetime']['time'] = Carbon::createFromTimestamp($weatherData['datetime']['timestamp'], 'Asia/Kolkata')
                ->format('g:i A');
        }
        return view('weather.show', ['weatherData' => $weatherData]);
    }
}