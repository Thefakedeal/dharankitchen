<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SavePhoto;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventsquery = Event::query();
        $eventsquery->orderBy('date','DESC');
        $events = $eventsquery->paginate(500000);
        return view('admin.events.index',compact('events'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.events.create');
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
            'title'=>'required',
            'description'=>'required'
        ]);
        $event = new Event();
        DB::transaction(function() use($request,$event){
            $event->title = $request->title;
            $event->description = $request->description;
            $event->date = $request->date;
            $event->save();
            if($request->hasFile('images')){
                foreach($request->images as $image){
                    $eventimage = new EventImage();
                    $eventimage->event_id = $event->id;
                    $imagelink = SavePhoto::SaveImage($image);
                    $eventimage->image = $imagelink;
                    $eventimage->save();
                }
            }
        });
        return redirect()->back()->with('success','Event Added');
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
        $event = Event::findOrFail($id);
        $event->load('images');
        return view('admin.events.edit',compact('event'));
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
            'title'=>'required',
            'description'=>'required'
        ]);
        $event = Event::findOrFail($id);
        DB::transaction(function() use($request,$event){
            $event->title = $request->title;
            $event->description = $request->description;
            $event->date = $request->date;
            $event->update();
            if($request->hasFile('images')){
                foreach($request->images as $image){
                    $eventimage = new EventImage();
                    $eventimage->event_id = $event->id;
                    $imagelink = SavePhoto::SaveImage($image);
                    $eventimage->image = $imagelink;
                    $eventimage->save();
                }
            }
        });
        return redirect()->back()->with('success','Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->back()->with('success','Event Deleted');
    }
}
