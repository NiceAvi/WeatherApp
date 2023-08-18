<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
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


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


    