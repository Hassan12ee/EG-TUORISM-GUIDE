<?php

namespace App\Http\Controllers\services;
use App\Http\Controllers\Controller;
use App\Models\hotel;
use Illuminate\View\View;


class HotelController extends Controller
{
    public function getdetails()
    {
      $view=  hotel::select('ID','Hotels','imgpath',) ->paginate(PAGINATION_COUNT);



      return view('services.hotels',compact(var_name:'view'));
    }

    public function gethotel($hotel_id)
    {
        $exit= hotel::find($hotel_id);
        if(!$exit)
        return redirect() ->back();

        $hotel_info = hotel::select(
        'ID',
        'Hotels',
        'Type',
        'Region',
        'Rating',
        'Popularity',
        'Opening_Hours',
        'Budget',
        'Facilities',
        'imgpath',) ->find($hotel_id);
        return view('services.hotel_info',compact(var_name:'hotel_info')) ;

    }
}
