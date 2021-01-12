<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoomImage;
use Illuminate\Http\Request;

class AdminDeleteImage extends Controller
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
            'id'=>'required|exists:room_images,id'
        ]);
        $image = RoomImage::findOrFail($request->id);
        $image->delete();
        return redirect()->back()->with('success','Image Deleted');
    }
}
