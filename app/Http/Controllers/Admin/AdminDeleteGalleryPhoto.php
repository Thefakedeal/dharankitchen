<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class AdminDeleteGalleryPhoto extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'id'=>'required|exists:gallery_images,id'
        ]);
        $image = GalleryImage::findOrFail($request->id);
        $image->delete();
        return redirect()->back()->with('success','Image Deleted');
    }
}
