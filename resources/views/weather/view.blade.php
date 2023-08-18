@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row mt-5">
                <div class="col-md-6 offset-md-3">
                    <h2 class="mb-4">Weather App</h2>
                    @include('flash-message')
                    <form action="{{ route('weather_show') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('city') is-invalid @enderror"
                                placeholder="Enter City Name" name="city" id="city" value="{{ old('city') }}">
                            <button class="btn btn-primary" id="btn-submit" type="submit">Get Weather</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
