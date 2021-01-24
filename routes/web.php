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
use App\Http\Controllers\Admin\AdminPlacesController;
use App\Http\Controllers\Admin\AdminQueryController;
use App\Http\Controllers\Admin\AdminRoomController;
use App\Http\Controllers\Admin\AdminRoomTypeController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminVenueController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SendQueryController;
use App\Models\Category;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Place;
use App\Models\Room;
use App\Models\RoomImage;
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
    $events = Event::orderby('created_at','desc')->take(4)->get();
    $events->load('images');
    $places = Place::take(4)->get();
    return view('frontend.welcome', compact(['events','places']));
});

Route::group([
    'prefix'=>'rooms'
],function($router){
    Route::get('/deluxe',function(){
        $imagesQuery = RoomImage::query();
        $imagesQuery->whereHas('room_type',function($query){
            $query->where('name','like','%deluxe%');
        });
        $images = $imagesQuery->get();
        $roomtypes = RoomType::all();
        $roomtypes->load('images');
        return view('frontend.rooms.deluxe',compact('roomtypes','images'));
    })->name('room.deluxe');
    
    Route::get('/standard',function(){
        $imagesQuery = RoomImage::query();
        $imagesQuery->whereHas('room_type',function($query){
            $query->where('name','like','%standard%');
        });
        $images = $imagesQuery->get();
        $roomtypes = RoomType::all();
        $roomtypes->load('images');
        return view('frontend.rooms.standard',compact('roomtypes','images'));
    })->name('room.standard');
    
    Route::get('/normal',function(){
        $imagesQuery = RoomImage::query();
        $imagesQuery->whereHas('room_type',function($query){
            $query->where('name','like','%normal%');
        });
        $images = $imagesQuery->get();
        $roomtypes = RoomType::all();
        $roomtypes->load('images');
        return view('frontend.rooms.normal',compact('roomtypes','images'));
    })->name('room.normal');
}
);

Route::get('/contact',function(){
    return view('frontend.contact');
})->name('contact');

// All Rooms
Route::get('/rooms',function(){
    $roomtypes = RoomType::all();
    $roomtypes->load('images');
    return view('frontend.rooms',compact('roomtypes'));
})->name('rooms');

//Room Profile
Route::get('/room-profile/{id}',function($id){
    $roomtype = RoomType::findOrFail($id);
    $roomtypes = RoomType::all();
    $roomtype->load('images');
    $roomtypes->load('images');
    return view('frontend.room-profile',compact('roomtype','roomtypes'));
})->name('room.profile');

//Booking Page
Route::get('/booking/{id}',function($id){
    $roomtype = RoomType::findOrFail($id);
    $roomtype->load('images');
    return view('frontend.booking', compact('roomtype'));
})->name('room.booking');

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


Route::get('/meeting',function(){
    return view('frontend.meeting');
})->name('meeting');

Route::get('/dining',function(){
    return view('frontend.dining');
})->name('dining');

Route::get('/packages', function(){
    return view('frontend.packages');
})->name('packages');

Route::get('/places', function(){
    $places = Place::all();
    return view('frontend.places',compact('places'));
})->name('places');

Route::get('/place/{id}',function($id){
    $place = Place::findOrFail($id);
    $places = Place::all();
    return view('frontend.place',compact('place','places'));
})->name('place');

Route::get('/events', function(){
    $events = Event::all();
    return view('frontend.events',compact('events'));
})->name('events');

Route::get('/event/{id}',function($id){
    $event = Event::findOrFail($id);
    $events = Event::all();
    $event->load('images');
    $events->load('images');
    return view('frontend.events',compact('event','events'));
})->name('event');

Route::post('/book',BookingController::class)->name('book');
Route::post('/query',SendQueryController::class)->name('query');

Route::get('/gallery',function(){
    $galleryQuery = Gallery::query();
    $galleries = $galleryQuery->has('images')->get();
    return view('frontend.gallery.index',compact('galleries'));
})->name('galleries');

Route::get('/gallery/{id}',function($id){
    $gallery = Gallery::findOrFail($id);
    $gallery->load('images');
    return view('frontend.gallery.show',compact('gallery'));
})->name('gallery');

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
    Route::resource('/query',AdminQueryController::class);
    Route::resource('/places',AdminPlacesController::class);
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');