<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SavePhoto;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleriesquery = Gallery::query();
        $galleries = $galleriesquery->paginate(10);
        return view('admin.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.create',compact('galleries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Adds Gallery With Images
        $request->validate([
            'name'=>'required'
        ]);
        $gallery = new Gallery();
        DB::transaction(function() use($gallery,$request){
            $gallery->name = $request->name;
            $gallery->save();
        if($request->hasFile('images')){
            foreach($request->images as $image){
                $gallery_image = new GalleryImage();
                $gallery_image->gallery_id = $gallery->id;
                $gallery_image->image = SavePhoto::SaveImage($image);
                $gallery_image->save(); 
            }
        }
        });
        return redirect()->back()->with('success','Gallery Added');
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
      $gallery = Gallery::findOrFail($id);
      $gallery->load('images');
      return view('admin.gallery.edit',compact('gallery'));  
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
        $gallery = Gallery::findOrFail($id);
        DB::transaction(function() use($gallery,$request){
            $gallery->name = $request->name;
            $gallery->update();
            if($request->hasFile('images')){
                foreach($request->images as $image){
                    $gallery_image = new GalleryImage();
                    $gallery_image->gallery_id = $gallery->id;
                    $gallery_image->image = SavePhoto::SaveImage($image);
                    $gallery_image->save(); 
                }
            }
        });
        return redirect()->back()->with('success','Gallery Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->back()->with('success','Gallery Deleted');
    }
}
