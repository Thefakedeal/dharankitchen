<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SavePhoto;
use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomImage;
use App\Models\RoomType;
use Illuminate\Http\Request;

class AdminRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomtypes = RoomType::all();
        $rooms = Room::all();
        $rooms->load('room_type');
        return view('admin.room.create',compact('roomtypes','rooms'));
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
            'room_code'=> 'required|unique:rooms',
            'room_type_id'=>'required|exists:room_types,id',
            'beds'=> 'numeric|required',
            'price'=>'required|min:0',
            'discount'=>'nullable|numeric|min:0|max:100',
        ]);
        $images = $request->images;
        $room = new Room();
        $room->room_code = $request->room_code;
        $room->room_type_id = $request->room_type_id;
        $room->beds = $request->beds;
        $room->ac= $request->ac;
        $room->fridge = $request->fridge;
        $room->pickup = $request->pickup;
        $room->wardrobe = $request->wardrobe;
        $room->sofa = $request->sofa;
        $room->tv = $request->tv;
        $room->hot_cold_shower = $request->hot_cold_shower;
        $room->wifi = $request->wifi;
        $room->bottled_water = $request->bottled_water;
        $room->offer = $request->offer;
        $room->price = $request->price;
        $discount = 0;
        if($request->discount){
            $room->discount = $request->discount;
            $discount = (int)($request->price * ($request->discount/100));
        }
        $room->room_charge = $room->price - $discount;
        $room->description = $request->description;
        $room->save();
        
        if($request->hasFile('images')){
            foreach($images as $image){
                $roomimage = new RoomImage();
                $roomimage->room_id = $room->id;
                $imagelink = SavePhoto::SaveImage($image);
                $roomimage->image = $imagelink;
                $roomimage->save();
            }
        }
        return redirect()->back()->with('success',"Room Added");
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
        $room = Room::find($id);
        $roomtypes = RoomType::all();
        $rooms = Room::all();
        $rooms->load('room_type');
        return view('admin.room.edit',compact('roomtypes','rooms','room'));
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
        $request->validate([
            'room_code'=> 'required|unique:rooms,room_code,'.$id,
            'room_type_id'=>'required|exists:room_types,id',
            'beds'=> 'numeric|required',
            'price'=>'required|min:0',
            'discount'=>'numeric|min:0|max:100',
        ]);
        
        $room = Room::find($id);
        $room->room_code = $request->room_code;
        $room->room_type_id = $request->room_type_id;
        $room->beds = $request->beds;
        $room->ac= $request->ac;
        $room->fridge = $request->fridge;
        $room->pickup = $request->pickup;
        $room->wardrobe = $request->wardrobe;
        $room->sofa = $request->sofa;
        $room->tv = $request->tv;
        $room->hot_cold_shower = $request->hot_cold_shower;
        $room->wifi = $request->wifi;
        $room->bottled_water = $request->bottled_water;
        $room->offer = $request->offer;
        $room->price = $request->price;
        $discount = 0;
        if($request->discount){
            $room->discount = $request->discount;
            $discount = (int)($request->price * ($request->discount/100));
        }
        $room->room_charge = $room->price - $discount;
        $room->description = $request->description;
        $room->save();
        return redirect()->back()->with('success',"Room Updated");
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
}
