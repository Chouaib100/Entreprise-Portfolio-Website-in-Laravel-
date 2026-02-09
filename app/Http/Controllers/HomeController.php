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

    public function edit_about($id){

        $about = About::find($id);

        return view('admin.form_edit_about',compact('about'));


    }


     public function update_about(Request $request, $id){

        $about= About::find($id);


       $about->short_desc = $request->short_desc;
        $about->title1 = $request->title1;
        $about->title2 = $request->title2;
        $about->title3 = $request->title3;
        $about->description = $request->description;

        $about->title_skills= $request->title_skills;
        $about->short_desc_skills= $request->short_desc_skills;

        $about->skill1 = $request->skill1;
        $about->skill1_percentage = $request->skill1_percentage;

        $about->skill2 = $request->skill2;
        $about->skill2_percentage = $request->skill2_percentage;

        $about->skill3 = $request->skill3;
        $about->skill3_percentage = $request->skill3_percentage;

        $about->skill4 = $request->skill4;
        $about->skill4_percentage = $request->skill4_percentage;


        $image = $request->photo;

        If($image){

            unlink('photo_about/'.$about->photo);

            $photoname = time().'.'.$image->getClientOriginalExtension();

            $image->move('photo_about',$photoname);

            $about->photo = $photoname;

        }
        
        $about->save();

        return redirect()->route('read_about');

    }
}
