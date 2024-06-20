<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Models\hotel;
use Illuminate\View\View;


class HotelController extends Controller
{
    public function adminview()
    {
      $view=  hotel::select(
      'ID',
      'Hotels',
      'Type',
      'Region',
      'Rating',
      'Popularity',
      'Opening_Hours',
      'Budget',
      'Facilities',
      'imgpath',) ->paginate(PAGINATION_COUNT);



      return view('admin.view_hotels',compact(var_name:'view'));
    }
    public function getdetails()
    {
      $view=  hotel::select(
      'ID',
      'Hotels',
      'Type',
      'Region',
      'Rating',
      'Popularity',
      'Opening_Hours',
      'Budget',
      'Facilities',
      'imgpath',) ->paginate(PAGINATION_COUNT);



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
        'imgpath','details',) ->find($hotel_id);
        return view('services.hotel_info',compact(var_name:'hotel_info')) ;

    }
    public function viewadmin()
    {
        return view('admin.hotels');
    }

    public function create(restaurantrequest $request)
    {


            //save photo in folder
            $file_extension = $request-> photo -> getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $path = 'img/hotels';
            $request-> photo-> move($path,$file_name);
        restaurant::create([

            'Hotels'=> $request['Hotels'],
            'Type'=> $request['Type'],
            'imgpath'=> $request['imgpath'],
            'Region'=> $request['Region'],
            'Rating'=> $request['Rating'],
            'Popularity'=> $request['Popularity'],
            'Opening_Hours'=> $request['Opening_Hours'],
            'Budget'=> $request['Budget'],
            'Facilities'=> $request['Facilities'],
            'details'=> $request['details'],

            ]);
            return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']);
    }
}
