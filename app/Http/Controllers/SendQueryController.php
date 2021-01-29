<?php

namespace App\Http\Controllers;

use App\Models\Query;
use Illuminate\Http\Request;

class SendQueryController extends Controller
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
            'name'=>'required',
            'email'=>'email|required',
            'mobile'=>'required|numeric|digits:10',
            'message'=> 'required'
        ]);
        $query = new Query();
        $query->name = $request->name;
        $query->email= $request->email;
        $query->mobile = $request->mobile;
        $query->message = $request->message;
        $query->save();
        return redirect()->back()->with('success', 'Thank You, '.$query->name.'. Your Query Has Been Submitted');
    }
}
