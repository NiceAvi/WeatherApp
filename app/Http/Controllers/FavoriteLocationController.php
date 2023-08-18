<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteLocationController extends Controller
{


    public function index()
    {
        $favoriteLocations = auth()->user()->favoriteLocations;

        return view('favorites.index', compact('favoriteLocations'));
    }

    
    public function store(Request $request)
    {
        $user = auth()->user();
        $city = $request->input('city');

        $user->favoriteLocations()->create(['city' => $city]);

        return redirect()->back()->with('success', 'Location added to favorites.');
    }

}