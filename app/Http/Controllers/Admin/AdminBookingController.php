<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Resources\BookingResource;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function index(Request $request){
        // $bookings = Booking::all();
        $bookingquery = Booking::query();
        if($request->has('confirmed')){
            $bookingquery->where('confirmed',$request->confirmed);
        }
        $bookingquery->orderBy('checkin','DESC')->orderBy('checkout','DESC');
        $bookings = $bookingquery->paginate(10);
        // $bookings = BookingResource::collection($bookingspage);
        // $bookings = $bookingspage;
        $bookings->load('roomtype');
        // dd($bookings);
        return view('admin.booking.index',compact('bookings'));
    }

    public function confirm(Request $request){
        $request->validate(
            [
                'id'=> 'required|exists:bookings,id',
            ]
        );
        $booking = Booking::findOrFail($request->id);
        $roomtype = $booking->roomtype;
        if($booking->confirmed == TRUE){
            return redirect()->back()->with('fail','Booking Already Confirmed');
        }
        $booking->confirmed = TRUE;
        $roomtype->available_rooms -= $booking->totalroom; 
        $roomtype->update();
        $booking->update();
        return redirect()->back()->with('success','Booking Confirmed');
    }
}
