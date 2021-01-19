<?php

use App\Http\Controllers\Admin\AdminBookingController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminCheckinController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminDeleteEventPhoto;
use App\Http\Controllers\Admin\AdminDeleteGalleryPhoto;
use App\Http\Controllers\Admin\AdminDeleteImage;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminGalleryController;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\Admin\AdminRoomController;
use App\Http\Controllers\Admin\AdminRoomTypeController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminVenueController;
use App\Http\Controllers\BookingController;
use App\Models\Category;
use App\Models\Menu;
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
    $roomtypes = RoomType::all();
    $roomtypes->load('images');
    return view('frontend.rooms',compact('roomtypes'));
});

//Room Profile
Route::get('/room-profile/{id}',function($id){
    $roomtype = RoomType::findOrFail($id);
    $roomtypes = RoomType::all();
    $roomtypes->load('images');
    return view('frontend.room-profile',compact('roomtype','roomtypes'));
});

//Booking Page
Route::get('/booking/{id}',function($id){
    $roomtype = RoomType::findOrFail($id);
    return view('frontend.booking', compact('roomtype'));
});

//Menues

Route::get('/menues/{id}',function($id){
    // $categories = Category::all();
    // $menues = Menu::where('venue_id',$id)->get();

    $categoriesQuery = Category::query();
    $categoriesQuery->whereHas('menues',function($query) use($id){
        $query->where('venue_id',$id);
    });

   $categories =  $categoriesQuery->with('menues',function($query) use($id){
        $query->where('venue_id',$id);
    })->get();
    
    return view('frontend.menues',compact('categories'));
});


Route::post('/book',BookingController::class)->name('book');

Route::group([
    'prefix' => 'admin',
    'middleware'=> 'admin'
], function ($router) {
    Route::resource('/user',AdminUserController::class);
    Route::get('/',AdminDashboardController::class)->name('admin.dashboard');
    Route::resource('category',AdminCategoryController::class);
    Route::resource('venue',AdminVenueController::class);
    Route::resource('menu',AdminMenuController::class);
    Route::resource('roomtype',AdminRoomTypeController::class);
    // Route::resource('room',AdminRoomController::class);
    Route::delete('image/room',AdminDeleteImage::class)->name('room.image.delete');
    Route::delete('image/event',AdminDeleteEventPhoto::class)->name('event.image.delete');
    Route::delete('image/gallery',AdminDeleteGalleryPhoto::class)->name('gallery.image.delete');
    Route::get('/bookings/new',[AdminBookingController::class,'new_bookings'])->name('admin.booking.new');
    Route::get('/bookings/confirmed',[AdminBookingController::class,'confirmed_bookings'])->name('admin.booking.confirmed');
    Route::post('/bookings/confirm',[AdminBookingController::class,'confirm'])->name('admin.booking.confirm');
    Route::delete('/bookings/cancel',[AdminBookingController::class,'cancel'])->name('admin.booking.cancel');
    Route::post('/bookings/checkin',[AdminBookingController::class,'checkin'])->name('admin.booking.checkin');
    Route::post('/checkin/checkout',[AdminCheckinController::class,'checkout'])->name('checkin.checkout');
    Route::resource('checkin',AdminCheckinController::class);
    Route::resource('/events', AdminEventController::class);
    Route::resource('/gallery', AdminGalleryController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
