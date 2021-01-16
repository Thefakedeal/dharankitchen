<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventImage;
use Illuminate\Http\Request;

class AdminDeleteEventPhoto extends Controller
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
            'id'=>'required|exists:event_images,id'
        ]);
        $image = EventImage::findOrFail($request->id);
        $image->delete();
        return redirect()->back()->with('success','Image Deleted');
    }
}
