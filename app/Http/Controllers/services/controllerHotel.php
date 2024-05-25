<?php

namespace App\Http\Controllers\services;
use App\Http\Controllers\Controller;
use App\Models\hotel;
use Illuminate\Http\Request;

class controllerHotel extends Controller
{
    public function getdetails()
    {
      $view=  hotel::select('nameh','imgpath','smalldetails','id') ->get();



      return view('services.hotels',compact(var_name:'view'));
    }
    public function gethotel($hotel_id)
    {
        $exit= hotel::find($hotel_id);
        if(!$exit)
        return redirect() ->back();

        $hotel_info = hotel::select(  'NameH','services','imgpath','smalldetails','Stars','Place-H','GPS-H',) ->find($hotel_id);
        return view('services.hotel_info',compact(var_name:'hotel_info')) ;

    }
}
