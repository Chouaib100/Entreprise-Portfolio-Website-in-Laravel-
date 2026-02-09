<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;

class HomeController extends Controller
{
    //
    public function read_home()
    {
        $homes = Home::all();
        return view('admin.home', compact('homes'));
    }

     public function show_home()
    {
        $homes = Home::get()->first();
        return view('frontend.index', compact('homes'));
    }

    public function edit_home($id){

        $home = Home::find($id);

        return view('admin.form_edit_home',compact('home'));


    }

    public function update_home(Request $request, $id){

        $home= Home::find($id);

        $request->validate([

            'title'=>'required',
            'short_desc'=>'required',
            'video_channel'=>'required',

        ],

        [

            'title.required'=>'You must type title Please',
            'short_desc.required'=>'You must type short description Please',
            'video_channel.required'=>'You must type video_channel Please',

        ]

       );

       $home->title = $request->title;
       $home->short_desc = $request->short_desc;
       $home->video_channel = $request->video_channel;
       $home->save();

        return redirect()->route('read_home');
    }


     public function read_about()
    {
        $abouts = About::all();
        return view('admin.about', compact('abouts'));
    }
}
