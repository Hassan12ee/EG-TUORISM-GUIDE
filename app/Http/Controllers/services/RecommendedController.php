<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RecommendedController extends Controller
{
    public function getRecommended()
    {
      return view('services.Recommended');
    }


}
