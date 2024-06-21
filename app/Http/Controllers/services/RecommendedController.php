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
        // Validate the incoming request
        $request->validate([
            'user_id' => 'required|integer',
            'places' => 'required|array',
            'restaurants' => 'required|array',
            'hotels' => 'required|array',
        ]);

        foreach ($request->places as $place) {
            $recommendSave = new RecommendSave();
            $recommendSave->user_id = $request->user_id;
            $recommendSave->tourist_places_id = json_encode($place['details']);  // Save the full details
            $recommendSave->save();
        }

        foreach ($request->restaurants as $restaurant) {
            $recommendSave = new RecommendSave();
            $recommendSave->user_id = $request->user_id;
            $recommendSave->restaurants_id = json_encode($restaurant['details']);  // Save the full details
            $recommendSave->save();
        }

        foreach ($request->hotels as $hotel) {
            $recommendSave = new RecommendSave();
            $recommendSave->user_id = $request->user_id;
            $recommendSave->hotels_id = json_encode($hotel['details']);  // Save the full details
            $recommendSave->save();
        }

        return response()->json(['message' => 'Recommendations saved successfully']);
    }
}
