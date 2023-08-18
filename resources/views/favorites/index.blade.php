@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-header">Favorite Locations</div>
                <div class="card-body">
                @include('flash-message')
                    <ul>
                        @foreach($favoriteLocations as $location)
                        <li>
                            {{ $location->city }} &nbsp;&nbsp;
                            <form action="{{ route('favorite-locations.destroy', $location) }}" method="POST" style="display: inline" onclick="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary btn-sm" type="submit">Delete</button>
                            </form>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
