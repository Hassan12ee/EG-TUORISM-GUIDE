<?php

namespace App\Http\Controllers\services;
use App\Http\Controllers\Controller;

use App\Models\restaurant;


class restaurantscontroller extends Controller
{
    public function getdetails()
    {
      $view=  restaurant::select('ID',
            'Place',
            'Food',
            'imgpath',
            'Region',
            'Rating',
            'Popularity',
            'Average_Cost',
            'Opening_Hours',
            'Price_Range',
            'Ambiance',) ->paginate(PAGINATION_COUNT);



      return view('services.restaurants',compact(var_name:'view'));
    }
    public function getrestaurants($restaurants_id)
    {
        $exit= restaurant::find($restaurants_id);
        if(!$exit)
        return redirect() ->back();

        $restaurants_info = restaurant::select(

            'ID',
            'Place',
            'Food',
            'imgpath',
            'Region',
            'Rating',
            'Popularity',
            'Average_Cost',
            'Opening_Hours',
            'Price_Range',
            'Ambiance',) ->find($restaurants_id);
        return view('services.restaurants_info',compact(var_name:'restaurants_info')) ;
    }
}
