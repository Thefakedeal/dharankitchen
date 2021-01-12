<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\RoomType;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $roomtype = RoomType::findOrFail($request->room_type_id);
        $request->validate([
            'room_type_id'=>'required|exists:room_types,id',
            'name'=>'required',
            'email'=>'required|email',
            'checkin'=>'required|date|before:checkout|after_or_equal:'.now()->toDateString(),
            'checkout'=>'required|date|after:checkin',
            'guests'=>'required',
            'totalroom'=>'required|min:1|max:'.$roomtype->available_rooms,
            'mobile'=>'required|digits:10',
        ]);
       
        $checkin = new Carbon($request->checkin);
        $checkout = new Carbon($request->checkout);
        $days = $checkin->diffInDays($checkout);
        $booking = new Booking();
        $booking->room_type_id = $request->room_type_id;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->checkin = $request->checkin;
        $booking->checkout = $request->checkout;
        $booking->guests = $request->guests;
        $booking->totalroom = $request->totalroom;
        $booking->mobile = $request->mobile;
        $booking->total = $request->totalroom * $roomtype->room_charge * $days;
        $booking->save();
        return redirect()->back()->with('success','Hello '.$request->name.','.'Your Request Has Been Sent We Will Contact You Within 45 minutes.');
    }
}
