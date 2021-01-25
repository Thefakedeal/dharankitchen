<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SavePhoto;
use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class AdminNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();
        return view('admin.notice.index',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');
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
            'show'=>'required'
        ]);
        $notice = new Notice();
        $notice->title = $request->title;
        $notice->message = $request->message;
        if($request->has('image')){
            $notice->image = SavePhoto::SaveImage($request->image);
        }
        $notice->show = $request->show;
        $notice->save();
        return redirect()->back()->with('success','Notice Added');
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
        $notice = Notice::findOrFail($id);
        return view('admin.notice.edit',compact('notice'));
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
            'show'=>'required'
        ]);
        $notice = Notice::findOrFail($id);
        $notice->title = $request->title;
        $notice->message = $request->message;
        if($request->has('image')){
            $notice->image = SavePhoto::SaveImage($request->image);
        }
        $notice->show = $request->show;
        $notice->update();
        return redirect()->back()->with('success','Notice Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();
        return redirect()->back()->with('success','Notice Deleted');
    }
}
