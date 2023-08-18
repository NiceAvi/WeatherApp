<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FavoriteLocation;

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

    public function destroy(FavoriteLocation $favoriteLocation)
    {
        // Check if the authenticated user owns the favorite location
        if ($favoriteLocation->user_id === auth()->id()) {
            $favoriteLocation->delete();
            return redirect()->back()->with('success', 'Location removed from favorites.');
        }

        return redirect()->back()->with('error', 'You are not authorized to delete this location.');
    }


}