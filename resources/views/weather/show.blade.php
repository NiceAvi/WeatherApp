@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row mt-5">
                <div class="col-md-6 offset-md-3">
                    <h2 class="mb-4">Weather Data</h2>
                    @if ($weatherData)
                        <div class="card text-center">
                            <div class="card-header">
                                {{ $weatherData['location']['name'] }}, {{ $weatherData['location']['country'] }}
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">
                                    <img src="{{ $weatherData['condition']['icon'] }}">
                                    {{ $weatherData['forecast']['temp'] }}°C
                                </h5>
                                <p>Weather: {{ $weatherData['condition']['name'] }}, {{ $weatherData['condition']['desc'] }}</p>
                                <p>Humidity: {{ $weatherData['forecast']['humidity'] }}%</p>
                                <p>Wind Speed: {{ $weatherData['wind']['speed'] }} m/s</p>
                                <form action="{{ route('favorite-locations.store')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="city" value="{{ $weatherData['location']['name'] }}">
                                    <button class="btn btn-primary" type="submit">Make Favorite</button>
                                </form>
                            </div>
                            <div class="card-footer text-muted">
                                {{ $weatherData['datetime']['formatted_day'] }}, {{ $weatherData['datetime']['formatted_date'] }},  {{ $weatherData['datetime']['time'] }}
                            </div>
                        </div>
                    @else
                        <h3>No Data Found.</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
