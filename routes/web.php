<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminDeleteImage;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\Admin\AdminRoomController;
use App\Http\Controllers\Admin\AdminRoomTypeController;
use App\Http\Controllers\Admin\AdminVenueController;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $roomtypes = RoomType::take(4)->get();
    $roomtypes->load('images');
    return view('frontend.welcome', compact('roomtypes'));
});

// All Rooms
Route::get('/rooms',function(){
    return view('frontend.rooms');
});

//Room Profile
Route::get('/room-profile',function(){
    return view('frontend.room-profile');
});

//Booking Page
Route::get('/booking',function(){
    return view('frontend.booking');
});

Route::get('/admin', function(){
    return view('admin.admin');
});
Route::group([
    'prefix' => 'admin'
], function ($router) {
    Route::resource('category',AdminCategoryController::class);
    Route::resource('venue',AdminVenueController::class);
    Route::resource('menu',AdminMenuController::class);
    Route::resource('roomtype',AdminRoomTypeController::class);
    Route::resource('room',AdminRoomController::class);
    Route::delete('image',AdminDeleteImage::class)->name('image.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
