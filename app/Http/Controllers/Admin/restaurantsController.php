<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\restaurantrequest;
use App\Models\restaurant;


class restaurantsController extends Controller
{

    public function view()
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
                'name' => $request['name'],
                'small_details'=>$request['small_details'],
                'imgpath'=>$file_name,
                'type-food' => 'foood',
                'stars'=> '5',
                'place'=> 'foood',
                'gps-r' => 'foood',
            ]);
            return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']);
    }
}
