<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SavePhoto;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Venue;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menuequery = Menu::query();
        if($request->has('venue_id')){
            $menuequery->where('venue_id',$request->venue_id);
        }
        $venues = Venue::all();
        $menues = $menuequery->paginate(15);
        return view('admin.menu.index',compact('menues','venues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $venues = Venue::all();
        return view('admin.menu.create',compact('venues','categories'));
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
            'venue_id'=> 'required|exists:venues,id',
            'category_id'=>'required|exists:categories,id',
            'name'=>'required',
            'price'=>'required|numeric',
            'image'=> 'nullable|image'
        ]);
        $menu = new Menu();
        $menu->venue_id = $request->venue_id;
        $menu->category_id = $request->category_id;
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->description = $request->description;
        if($request->hasFile('image')){
            $menu->image = SavePhoto::SaveImage($request->image);
        }
        $menu->save();
        return redirect()->back()->with('success','Menu Item Added');
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
        $menu = Menu::findOrFail($id);
        $categories = Category::all();
        $venues = Venue::all();
        return view('admin.menu.edit',compact('venues','categories','menu'));
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
            'venue_id'=> 'required|exists:venues,id',
            'category_id'=>'required|exists:categories,id',
            'name'=>'required',
            'price'=>'required|numeric',
            'image'=> 'nullable|image'
        ]);
        $menu = Menu::findOrFail($id);
        $menu->venue_id = $request->venue_id;
        $menu->category_id = $request->category_id;
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->description = $request->description;
        if($request->hasFile('image')){
            $menu->image = SavePhoto::SaveImage($request->image);
        }
        $menu->update();
        return redirect()->back()->with('success','Menu Item Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->back()->with('success','Menu Item Deleted');
    }
}
