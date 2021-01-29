<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SavePhoto;
use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class AdminPlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placeQuery = Place::query();
        $places = $placeQuery->paginate(500000);
        return view('admin.places.index',compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.places.create');
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
            'description'=>'required'
        ]);
        $place = new Place();
        $place->name= $request->name;
        $place->description = $request->description;
        if($request->has('image')){
            $place->image = SavePhoto::SaveImage($request->image);
        }

        $place->save();
        return redirect()->back()->with('success','Place Added');
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
        $place = Place::findOrFail($id);
        return view('admin.places.edit',compact('place'));
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
            'description'=>'required'
        ]);
        $place = Place::findOrFail($id);
        $place->name= $request->name;
        $place->description = $request->description;
        if($request->has('image')){
            $place->image = SavePhoto::SaveImage($request->image);
        }

        $place->update();
        return redirect()->back()->with('success','Place Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place = Place::findOrFail($id);
        $place->delete();
        return redirect()->back()->with('success','Place Deleted');
    }
}
