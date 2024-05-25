<?php

namespace App\Http\Controllers\services;
use App\Http\Controllers\Controller;

use App\Models\restaurant;


class restaurantscontroller extends Controller
{
    public function getdetails()
    {
      $view=  restaurant::select('id','name','imgpath','small_details',) ->get();



      return view('services.restaurants',compact(var_name:'view'));
    }
    public function getrestaurants($restaurants_id)
    {
        $exit= restaurant::find($restaurants_id);
        if(!$exit)
        return redirect() ->back();

        $restaurants_info = restaurant::select(
            'id',
            'name',
            'small_details',
            'imgpath',
            'type-food',
            'stars',
            'place',
            'gps-r',) ->find($restaurants_id);
        return view('services.restaurants_info',compact(var_name:'restaurants_info')) ;
    }
}
