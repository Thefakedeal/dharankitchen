<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Room;
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
       $roomquery = Room::query();
       $rooms = $roomquery->paginate(10);
       return view('admin.room.index',compact('rooms')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomtypes = RoomType::all();
        return view('admin.room.create',compact('roomtypes'));
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
            'room_number'=> 'required|unique:rooms',
            'room_type_id'=>'required|exists:room_types,id',
            
        ]);
       
        $room = new Room();
        $room->room_number = $request->room_number;
        $room->room_type_id = $request->room_type_id;
        $room->save();
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
        $room = Room::findOrFail($id);
        $roomtypes = RoomType::all();
        return view('admin.room.edit',compact('roomtypes','room'));
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
            'room_number'=> 'required|unique:rooms,room_number,'.$id,
            'room_type_id'=>'required|exists:room_types,id',
            
        ]);
        $room = Room::find($id);
        $room->room_number = $request->room_number;
        $room->room_type_id = $request->room_type_id;
        
        $room->update();
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
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->back()->with('success','Room Deleted');
    }
}
