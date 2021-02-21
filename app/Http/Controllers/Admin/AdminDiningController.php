<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SavePhoto;
use App\Http\Controllers\Controller;
use App\Models\Dining;
use Illuminate\Http\Request;

class AdminDiningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinings = Dining::all();
        return view('admin.dining.index',compact('dinings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dining.create');
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
            'name' => 'required'
        ]);
        $dining = new Dining();
        $dining->name = $request->name;
        $dining->description = $request->description;
        if($request->has('image')){
            $dining->image = SavePhoto::SaveImage($request->image);
        }
        $dining->save();
        return redirect()->back()->with('success','Dining Added Sucessfully');
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
        $dining =Dining::findOrFail($id);
        return view('admin.dining.edit',compact('dining'));
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
            'name' => 'required'
        ]);
        $dining = Dining::findOrFail($id);
        $dining->name = $request->name;
        $dining->description = $request->description;
        if($request->has('image')){
            $dining->image = SavePhoto::SaveImage($request->image);
        }
        $dining->update();
        return redirect()->back()->with('success','Dining Added Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dining = Dining::findOrFail($id);
        $dining->delete();
        return redirect()->back()->with('success','Dining Deleted Successfully');
    }
}
