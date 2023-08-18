<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\WeatherAlertEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Dnsimmons\OpenWeather\OpenWeather;

class SendWeatherAlerts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-weather-alerts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(OpenWeather $openWeather)
    {
        $users = User::with('favoriteLocations')->get();

        foreach ($users as $user) {
            foreach ($user['favoriteLocations'] as $alert) {
                $weatherData = $openWeather->getCurrentWeatherByCityName($alert->city);
                if (isset($weatherData)) {
                        $weatherData['datetime']['time'] = Carbon::createFromTimestamp($weatherData['datetime']['timestamp'], 'Asia/Kolkata')
                            ->format('g:i A');
                    // Send email
                    Mail::to($user['email'])->send(new WeatherAlertEmail($weatherData));
                }
            }
        }
    }
}