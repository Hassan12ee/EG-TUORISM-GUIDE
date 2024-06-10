<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

define('PAGINATION_COUNT', 16);
Auth::routes(['verify'=> true]);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/hotels', [App\Http\Controllers\services\controllerHotel::class, 'getdetails'])->name('hotels');
Route::get('/hotels/Content/{Hotel_id}', [App\Http\Controllers\services\controllerHotel::class, 'gethotel']);
Route::get('/ourplans', [App\Http\Controllers\services\controllerHotel::class, 'getdetail'])->name('ourplans')-> middleware('verified');
Route::get('/restaurants', [App\Http\Controllers\services\restaurantscontroller::class, 'getdetails'])->name('restaurants');
Route::get('/restaurants/Content/{restaurants_id}', [App\Http\Controllers\services\restaurantscontroller::class, 'getrestaurants']);
Route::get('/Tourplaces', [App\Http\Controllers\services\tourist_placesController::class, 'getdetails'])->name('Tourplaces');
Route::get('/Tourplaces/Content/{Tourplaces_id}', [App\Http\Controllers\services\tourist_placesController::class, 'gettourist_places']);
Route::get('/Recommended', [App\Http\Controllers\services\RecommendedController::class, 'getRecommended'])->name('Recommended');




#<!----------------------------------------------------------------------------->
#                          admin routes
#<!----------------------------------------------------------------------------->



Route::get('/admin/restrestaurants',[App\Http\Controllers\Admin\restaurantsController::class,'view']);
Route::post('/admin/restrestaurants/create',[App\Http\Controllers\Admin\restaurantsController::class,'create'])->name('res.create');
