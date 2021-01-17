<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Resources\BookingResource;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function new_bookings(Request $request){
        // $bookings = Booking::all();
        $bookingquery = Booking::query();
        $bookingquery->where('confirmed',FALSE);
        $bookingquery->where('cancelled',FALSE);
        $bookingquery->orderBy('checkin','DESC')->orderBy('checkout','DESC');
        $bookings = $bookingquery->paginate(10);
        // $bookings = BookingResource::collection($bookingspage);
        // $bookings = $bookingspage;
        $bookings->load('roomtype');
        // dd($bookings);
        return view('admin.booking.index',compact('bookings'));
    }

    public function confirmed_bookings(Request $request){
        $bookingquery = Booking::query();
        if($request->has('name')){
            $bookingquery->where('name','LIKE','%'.$request->name.'%');
        }
        $bookingquery->where('confirmed',TRUE);
        $bookingquery->where('cancelled',FALSE);
        $bookingquery->orderBy('checkin','DESC')->orderBy('checkout','DESC');
        $bookings = $bookingquery->paginate(10);
        $bookings->load('roomtype');
        return view('admin.booking.confirmed',compact('bookings'));
    }
    
    public function confirm(Request $request){
        $request->validate(
            [
                'id'=> 'required|exists:bookings,id',
            ]
        );
        $booking = Booking::findOrFail($request->id);
        if($booking->confirmed == TRUE){
            return redirect()->back()->with('fail','Booking Already Confirmed');
        }
        $booking->confirmed = TRUE;
        $booking->update();
        return redirect()->back()->with('success','Booking Confirmed');
    }

    public function cancel(Request $request){
        $request->validate(
            [
                'id'=> 'required|exists:bookings,id',
            ]
        );
        $booking = Booking::findOrFail($request->id);
        $booking->cancelled = TRUE;
        $booking->save();
        return redirect()->back()->with('success','Booking Cancelled');
    }
    
    public function checkin(Request $request){
        $request->validate(
            [
                'id'=> 'required|exists:bookings,id',
            ]
        );
        $booking = Booking::findOrFail($request->id);
        return redirect(route('checkin.create'))
            ->with('name',$booking->name)
            ->with('email',$booking->email)
            ->with('mobile',$booking->mobile)
            ->with('guests',$booking->guests)
            ->with('room_type_id',$booking->room_type_id)
            ->with('totalroom',$booking->totalroom)
            ;
    }
}
