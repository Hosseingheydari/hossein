<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoreyFoodController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RestaurantController;
use App\Models\Post;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/a', function () {

});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::resource('addresses', AddressController::class)
->middleware(['auth']);


Route::resource('categoreyfoods', CategoreyFoodController::class)
->middleware(['auth']);

Route::resource('restaurants', RestaurantController::class)
->middleware(['auth']);

Route::resource('foods', FoodController::class)
->middleware(['auth']);

Route::resource('offers', OfferController::class)
->middleware(['auth']);

Route::get('info', function () {
    return view('info');
})->middleware(['auth'])->name('info');


Route::resource('posts', PostController::class)
    ->middleware(['auth'])->missing(function (HttpRequest $request) {
        return redirect()->route('photos.index');
    });




require __DIR__ . '/auth.php';
