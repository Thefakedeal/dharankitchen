<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkin;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $checkinsQuery = Checkin::query();

        if ($request->has('checkedout')) {
            switch ($request->checkedout) {
                case 0:
                    $checkinsQuery->whereNull('checkout');
                    break;
                case 1:
                    $checkinsQuery->whereNotNull('checkout');
                default:
                    # code...
                    break;
            }
        }
        $checkinsQuery->orderBy('checkin', 'DESC')->orderBy('checkout', 'DESC');
        $checkins = $checkinsQuery->paginate(10);
        return view('admin.checkin.index', compact('checkins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomtypes = RoomType::all();
        return view('admin.checkin.create', compact('roomtypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'mobile' => 'numeric|required|digits:10',
            'guests' => 'numeric|required|min:1',
            'room_type_id' => 'exists:room_types,id|required',
            'totalrooms' => 'required|min:1',
            'checkin' => 'required|date',
            // 'checkout' => 'nullable|date|after:checkin',
        ]);
        DB::transaction(function () use ($request) {
            $checkin = new Checkin();
            $checkin->name = $request->name;
            $checkin->email = $request->email;
            $checkin->mobile = $request->mobile;
            $checkin->guests = $request->guests;
            $checkin->room_type_id = $request->room_type_id;
            $checkin->totalrooms = $request->totalrooms;
            $checkin->checkin = $request->checkin;
            // $checkin->checkout = $request->checkout;
            $checkin->details = $request->details;
            $checkin->save();

            $room_type = $checkin->room_type;
            $room_type->available_rooms -= $checkin->totalrooms;
            $room_type->update();

        });

        return redirect()->back()->with('success', 'Customer is Checked In');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function checkout(Request $request){
        $request->validate([
            'id'=>'required|exists:checkins,id'
        ]);
        $checkin = Checkin::findOrFail($request->id);
        DB::transaction(function () use ($request,$checkin) {
            if($checkin->checkout){
                return redirect()->back()->with('fail','Customer Already Checkedout');
            }
            $checkin->checkout = now()->toDateString();
            $checkin->update();
            $room_type = $checkin->room_type;
            $room_type->available_rooms += $checkin->totalrooms;
            $room_type->update();
        });
        return redirect()->back()->with('success', 'Customer Has Been Checked Out');
    }
}
