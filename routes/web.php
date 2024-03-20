<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});


Route::get('/user/{name?}', function ($name = '_ALL_') {
    if($name = "_ALL_")
    {
        return "List User";
    }
    else{
    }
});


Route::get('/kategori/{kategori?}', function ($kategori = 'single') {
    return view('kategori', ['kategori' => $kategori]);
});


Route::get('/hotel/{hotel}', function ($hotel) {
    return view('hotel',['hotel'=>$hotel]);
});

Route::get('/promo/{promo}', function ($promo) {
    return view('promo',['promo'=>$promo]);
});

Route::resource('hotel', HotelController::class);

Route::resource('product', ProductController::class);
