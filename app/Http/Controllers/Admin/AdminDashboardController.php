<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Checkin;
use App\Models\RoomType;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $checkinsQuery = Checkin::query();
        $guests = $checkinsQuery->whereNull('checkout')->sum('guests');
        $roomtypes = RoomType::all();

        $bookingquery = Booking::query();
        $newbooking= $bookingquery->where('confirmed',FALSE)->where('cancelled',FALSE)->count();
        return view('admin.dashboard.index', compact('guests','roomtypes','newbooking'));
    }
}
