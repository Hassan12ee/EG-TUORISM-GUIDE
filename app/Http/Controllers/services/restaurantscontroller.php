<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Http\Requests\restaurantrequest;
use App\Models\restaurant;


class RestaurantsController extends Controller
{
    public function adminview()
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
            'Ambiance','details',) ->paginate(PAGINATION_COUNT);



      return view('admin.view_restaurants',compact(var_name:'view'));
    }
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
    public function viewadmin()
    {
        return view('admin.restaurants');
    }

    public function create(restaurantrequest $request)
    {


            //save photo in folder
            $file_extension = $request-> photo -> getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $path = 'img/restaurants';
            $request-> photo-> move($path,$file_name);
        restaurant::create([

            'Place'=> $request['Place'],
            'Food'=> $request['Food'],
            'imgpath'=> $request['imgpath'],
            'Region'=> $request['Region'],
            'Rating'=> $request['Rating'],
            'Popularity'=> $request['Popularity'],
            'Average_Cost'=> $request['Average_Cost'],
            'Opening_Hours'=> $request['Opening_Hours'],
            'Price_Range'=> $request['Price_Range'],
            'Ambiance'=> $request['Ambiance'],
            'details'=> $request['details'],
            ]);
            return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']);
    }
}
