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

define('PAGINATION_COUNT', 8);
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/hotels', [App\Http\Controllers\services\HotelController::class, 'getdetails'])->name('hotels');
Route::get('/hotels/Content/{Hotel_id}', [App\Http\Controllers\services\HotelController::class, 'gethotel']);
Route::get('/ourplans', [App\Http\Controllers\services\ourplansController::class, 'getdetail'])->name('ourplans');
Route::get('/restaurants', [App\Http\Controllers\services\restaurantscontroller::class, 'getdetails'])->name('restaurants');
Route::get('/restaurants/Content/{restaurants_id}', [App\Http\Controllers\services\restaurantscontroller::class, 'getrestaurants']);
Route::get('/restaurants/plan/{restaurants_id}', [App\Http\Controllers\services\restaurantscontroller::class, 'getrestaurants']);
Route::get('/Tourplaces', [App\Http\Controllers\services\tourist_placesController::class, 'getdetails'])->name('Tourplaces');
Route::get('/Tourplaces/Content/{Tourplaces_id}', [App\Http\Controllers\services\tourist_placesController::class, 'gettourist_places']);
Route::get('/Recommended', [App\Http\Controllers\services\RecommendedController::class, 'getRecommended'])->name('Recommended');



