<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Models\hotel;
use Illuminate\View\View;


class ourplansController extends Controller
{

    public function getdetail()
    {
      $view=  hotel::select('ID','Hotels','imgpath',) ->paginate(PAGINATION_COUNT);



      return view('services.ourplans',compact(var_name:'view'));
    }
    public function gethotel($hotel_id)
    {
        $exit= hotel::find($hotel_id);
        if(!$exit)
        return redirect() ->back();

        $hotel_info = hotel::select(  'NameH','services','imgpath','smalldetails','Stars','Place-H','GPS-H',) ->find($hotel_id);
        return view('services.hotel_info',compact(var_name:'hotel_info')) ;

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
            'ID'=> $request['ID'],
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
            ]);
            return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']);
    }
}
