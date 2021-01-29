<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SavePhoto;
use App\Http\Controllers\Controller;
use App\Models\Meeting;
use Illuminate\Http\Request;

class AdminMeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings = Meeting::all();
        return view('admin.meeting.index',compact('meetings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.meeting.create');
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
            'name'=>'required'
        ]);
        $meeting = new Meeting();
        $meeting->name = $request->name;
        $meeting->description = $request->description;
        if($request->has('image')){
            $meeting->image = SavePhoto::SaveImage($request->image);
        }
        $meeting->save();
        return redirect()->back()->with('success','Meeting Hall Added');
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
        $meeting = Meeting::findOrFail($id);
        return view('admin.meeting.edit',compact('meeting'));
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
            'name'=>'required'
        ]);
        $meeting =Meeting::findOrFail($id);
        $meeting->name = $request->name;
        $meeting->description = $request->description;
        if($request->has('image')){
            $meeting->image = SavePhoto::SaveImage($request->image);
        }
        $meeting->update();
        return redirect()->back()->with('success','Meeting Hall Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meeting = Meeting::findOrFail($id);
        $meeting->delete();
        return redirect()->back()->with('success','Meeting Hall Deleted');
    }
}
