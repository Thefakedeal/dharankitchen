<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SavePhoto;
use App\Http\Controllers\Controller;
use App\Models\RoomImage;
use App\Models\RoomType;
use Illuminate\Http\Request;

class AdminRoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomtypequery = RoomType::query();
        $roomtypes = $roomtypequery->paginate(10);
        return view('admin.roomtype.index',compact('roomtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roomtype.create');
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
            'name'=>'required',
            'beds'=> 'numeric|required',
            'price'=>'required|min:0',
            'discount'=>'nullable|numeric|min:0|max:100',
            'available'=>'required|min:0',
        ]);
        $roomtype = new RoomType();
        $roomtype->name = $request->name;
        $roomtype->beds = $request->beds;
        $roomtype->available_rooms = $request->available;
        $roomtype->ac= $request->ac;
        $roomtype->fridge = $request->fridge;
        $roomtype->pickup = $request->pickup;
        $roomtype->wardrobe = $request->wardrobe;
        $roomtype->sofa = $request->sofa;
        $roomtype->tv = $request->tv;
        $roomtype->hot_cold_shower = $request->hot_cold_shower;
        $roomtype->wifi = $request->wifi;
        $roomtype->bottled_water = $request->bottled_water;
        $roomtype->parking = $request->parking;
        $roomtype->price = $request->price;
        $discount = 0;
        if($request->discount){
            $roomtype->discount = $request->discount;
            $discount = (int)($request->price * ($request->discount/100));
        }
        $roomtype->room_charge = $roomtype->price - $discount;
        $roomtype->description = $request->description;
        $images = $request->images;
        $roomtype->save();
        if($request->hasFile('images')){
            foreach($images as $image){
                $roomimage = new RoomImage();
                $roomimage->room_type_id = $roomtype->id;
                $imagelink = SavePhoto::SaveImage($image);
                $roomimage->image = $imagelink;
                $roomimage->save();
            }
        }
        return redirect()->back()->with('success','Room Type Added');
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
        $roomtype = RoomType::findOrFail($id);
        $roomtype->load('images');
        return view('admin.roomtype.edit',compact('roomtype'));
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
            'name'=>'required',
            'beds'=> 'numeric|required',
            'price'=>'required|min:0',
            'discount'=>'numeric|min:0|max:100',
            'available'=>'required|min:0'
        ]);
        $roomtype = RoomType::findOrFail($id);
        $roomtype->name = $request->name;
        $roomtype->beds = $request->beds;
        $roomtype->available_rooms = $request->available;
        $roomtype->ac= $request->ac;
        $roomtype->fridge = $request->fridge;
        $roomtype->pickup = $request->pickup;
        $roomtype->wardrobe = $request->wardrobe;
        $roomtype->sofa = $request->sofa;
        $roomtype->tv = $request->tv;
        $roomtype->hot_cold_shower = $request->hot_cold_shower;
        $roomtype->wifi = $request->wifi;
        $roomtype->bottled_water = $request->bottled_water;
        $roomtype->parking = $request->parking;
        $roomtype->price = $request->price;
        $discount = 0;
        if($request->discount){
            $roomtype->discount = $request->discount;
            $discount = (int)($request->price * ($request->discount/100));
        }
        $roomtype->room_charge = $roomtype->price - $discount;
        $roomtype->description = $request->description;
        $roomtype->update();

        $images = $request->images;
        if($request->hasFile('images')){
            foreach($images as $image){
                $roomimage = new RoomImage();
                $roomimage->room_type_id = $roomtype->id;
                $imagelink = SavePhoto::SaveImage($image);
                $roomimage->image = $imagelink;
                $roomimage->save();
            }
        }
        return redirect()->back()->with('success','Room Type Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomtype = RoomType::findOrFail($id);
        $roomtype->delete();
        return redirect()->back()->with('success','Room Type Deleted');
    }
}
