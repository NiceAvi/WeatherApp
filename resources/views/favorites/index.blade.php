@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Favorite Locations</div>
                <div class="card-body">
                    <ul>
                        @foreach($favoriteLocations as $location)
                            <li>{{ $location->city }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
