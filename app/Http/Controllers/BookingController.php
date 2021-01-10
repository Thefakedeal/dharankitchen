<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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
        $request->validate([
            'room_type_id'=>'required|exists:room_types,id',
            'name'=>'required',
            'email'=>'required|email',
            'checkin'=>'required|date|before:checkout|after_or_equal:'.now()->toDateString(),
            'checkout'=>'required|date|after:checkin',
            'guests'=>'required',
            'totalroom'=>'required|min:1',
            'mobile'=>'required|digits:10',
        ]);
        $booking = new Booking();
        $booking->room_type_id = $request->room_type_id;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->checkin = $request->checkin;
        $booking->checkout = $request->checkout;
        $booking->guests = $request->guests;
        $booking->totalroom = $request->totalroom;
        $booking->mobile = $request->mobile;

        $booking->save();
        return redirect('/');
    }
}
