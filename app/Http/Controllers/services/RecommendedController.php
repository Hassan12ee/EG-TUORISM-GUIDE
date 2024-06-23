<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RecommendSave;

class RecommendedController extends Controller
{
    public function getRecommended()
    {
        return view('services.Recommended');
    }

    public function recommendSave(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'user_id' => 'required|integer',
            'places' => 'nullable|array',
            'restaurants' => 'nullable|array',
            'hotels' => 'nullable|array',
        ]);
        try {
        // Extract data from the request
        $user_id = $request->input('user_id');
        $places = $request->input('places', []);
        $restaurants = $request->input('restaurants', []);
        $hotels = $request->input('hotels', []);

        foreach ($hotels as $hotelsData) {
            users_hotels::create([
                'hotel_id'=> $hotelsData['id'],
                'user_id'=> $user_id,

            ]);}
        foreach ($restaurants as $restaurantsData) {
            users_restaurants::create([
                'restaurant_id'=> $restaurantsData['id'],
                'user_id'=> $user_id,

            ]);}
        foreach ($places as $placeData) {
            users_tourist_places::create([
                'tourist_place_id'=> $placeData['id'],
                'user_id'=> $user_id,

            ]);
        }


        return response()->json(['message' => 'Recommendations saved successfully']);
    } catch (\Exception $e) {
        // Log the exception or handle it appropriately
        return response()->json(['error' => 'Something went wrong. Please try again later.'], 500);
    }}

}
