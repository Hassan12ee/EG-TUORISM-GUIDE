<?php

namespace App\Http\Controllers\services;
use App\Http\Controllers\Controller;
use App\Models\hotel;
use App\Models\tourist_place;
use Illuminate\Http\Request;

class tourist_placesController extends Controller
{
    public function getdetails()
    {
      $view=  tourist_place::select(
        'ID',
        'Place',
        'Type',
        'imgpath',
        'Region',
        'Rating',
        'Popularity',
        'Opening_Hours',
        'Budget',
        'Activity_Level',
        'Indoor_Outdoor',
      ) ->paginate(PAGINATION_COUNT);



      return view('services.Tourplaces',compact(var_name:'view'));
    }
    public function gettourist_places($tourist_places_id)
    {
        $exit= hotel::find($tourist_places_id);
        if(!$exit)
        return redirect() ->back();

        $tourist_places_info = hotel::select(
            'ID',
            'Place',
            'Type',
            'imgpath',
            'Region',
            'Rating',
            'Popularity',
            'Opening_Hours',
            'Budget',
            'Activity_Level',
            'Indoor_Outdoor',) ->find($tourist_places_id);
        return view('services.Tourplaces_info',compact(var_name:'tourist_places_info')) ;

    }

}
