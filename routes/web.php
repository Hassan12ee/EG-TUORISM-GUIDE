<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\restaurantscontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Services\HotelController;
use App\Http\Controllers\Services\ourplansController;
use App\Http\Controllers\Services\tourist_placesController;
use App\Http\Controllers\Services\RecommendedController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use app\Http\Middleware\Admin;

/*
|--------------------------------------------------------------------------
| Web RoutesHotelController
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

define('PAGINATION_COUNT', 10);
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/hotels', [HotelController::class, 'getdetails'])->name('hotels');
Route::get('/hotels/Content/{Hotel_id}', [HotelController::class, 'gethotel']);
Route::get('/ourplans', [ourplansController::class, 'getdetail'])->name('ourplans');
Route::get('/restaurants', [RestaurantsController::class, 'getdetails'])->name('restaurants');
Route::get('/restaurants/Content/{restaurants_id}', [RestaurantsController::class, 'getrestaurants']);
Route::get('/restaurants/plan/{restaurants_id}', [RestaurantsController::class, 'getrestaurants']);
Route::get('/Tourplaces', [tourist_placesController::class, 'getdetails'])->name('Tourplaces');
Route::get('/Tourplaces/Content/{Tourplaces_id}',[tourist_placesController::class, 'gettourist_places']);
Route::get('/Recommended', [RecommendedController::class, 'getRecommended'])->name('Recommended');
Route::post('/save_recommendations', [RecommendedController::class, 'saveRecommendations'])->name('save_recommendations');
Route::post('/Recommended', [RecommendedController::class, 'getRecommended'])->name('Recommended');

########################### admin side ####################################
Route::middleware(['auth' ,'Admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminhome'])->name('adminhome');

    Route::get('/admin/restaurant/view',[RestaurantsController::class,'adminview']);
    Route::get('/admin/restaurant',[RestaurantsController::class,'viewadmin']);
    Route::post('/admin/restaurant/create',[RestaurantsController::class,'create'])->name('res.create');

    Route::get('/admin/Tourplaces/view',[tourist_placesController::class,'adminview']);
Route::get('/admin/Tourplaces',[tourist_placesController::class,'viewadmin']);
Route::post('/admin/Tourplaces/create',[tourist_placesController::class,'create'])->name('res1.create');

Route::get('/admin/hotels/view',[HotelController::class,'adminview']);
Route::get('/admin/hotels/update/{Hotel_id}',[HotelController::class,'edit']);
Route::get('/admin/hotels/update/done/{Hotel_id}',[HotelController::class,'Update']);
Route::get('/admin/hotels',[HotelController::class,'viewadmin']);
Route::post('/admin/hotels/create',[HotelController::class,'create'])->name('res2.create');

// Route::get('/admin/restaurant',[RestaurantsController::class,'viewadmin']);
// Route::post('/admin/restaurant/create',[RestaurantsController::class,'create'])->name('res3.create');
});

