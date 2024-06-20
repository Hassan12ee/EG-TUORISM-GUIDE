<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Models\hotel;
use App\Models\tourist_place;
use Illuminate\Http\Request;

class tourist_placesController extends Controller
{
    public function adminview()
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
        'details',
      ) ->paginate(PAGINATION_COUNT);



      return view('admin.view_Tourplaces',compact(var_name:'view'));
    }
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
            'Indoor_Outdoor', 'details',) ->find($tourist_places_id);
        return view('services.Tourplaces_info',compact(var_name:'tourist_places_info')) ;

    }
    public function viewadmin()
    {
        return view('admin.Tourplaces');
    }

    public function create(Touristrequest $request)
    {


            //save photo in folder
            $file_extension = $request-> photo -> getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $path = 'img/Tourplaces';
            $request-> photo-> move($path,$file_name);
            tourist_place::create([

            'Place'=> $request['Place'],
            'Type'=> $request['Type'],
            'imgpath'=> $request['imgpath'],
            'Region'=> $request['Region'],
            'Rating'=> $request['Rating'],
            'Popularity'=> $request['Popularity'],
            'Opening_Hours'=> $request['Opening_Hours'],
            'Budget'=> $request['Budget'],
            'Activity_Level'=> $request['Activity_Level'],
            'Indoor_Outdoor'=> $request['Indoor_Outdoor'],
            'details'=> $request['details'],
            ]);
            return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']);
    }
}
