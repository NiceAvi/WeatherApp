<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\FavoriteLocationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/weather', [WeatherController::class, 'weatherView'])->name('weather_view');
    Route::post('/weather', [WeatherController::class, 'showWeather'])->name('weather_show');
    Route::post('/favorite-locations', [FavoriteLocationController::class, 'store'])->name('favorite-locations.store');
    Route::get('/favorite-locations', [FavoriteLocationController::class, 'index'])->name('favorite-locations.index');
});