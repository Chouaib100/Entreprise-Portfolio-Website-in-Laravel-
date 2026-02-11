<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;


class TeamController extends Controller
{
    public function show_team(){


        $teams = Team::all();


    }

    public function add_team(){

        return view('admin.form_add_team');
    }

    public function create_team(Request $request){

        $team = new Team;


        $team->name = $request->name;
        $team->job = $request->job;
        $team->short_desc = $request->short_desc;
        $team->facebook= $request->facebook;
        $team->linkdlin= $request->linkdlin;
        $team->instagram= $request->instagram;
        $team->twitter= $request->twitter;

//image
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $photoname = time() . '_photo.' . $image->getClientOriginalExtension();
            $image->move(public_path('photo_team'), $photoname);
            $team->photo = $photoname;
        }

//pdf
        if ($request->hasFile('pdfresume')) {
            $pdfresume = $request->file('pdfresume');
            $pdfresumename = time() . '_resume.' . $pdfresume->getClientOriginalExtension();
            $pdfresume->move(public_path('pdfteams'), $pdfresumename);
            $team->pdfresume = $pdfresumename;
        }

//video
        if ($request->hasFile('videocandidate')) {
            $videocandidate = $request->file('videocandidate');
            $videocandidatename = time() . '_video.' . $videocandidate->getClientOriginalExtension();
            $videocandidate->move(public_path('videoteams'), $videocandidatename);
            $team->videocandidate = $videocandidatename;
        }


        $team->save();

        return redirect()->route('read_team');




    }

    public function delete_team($id){

        $team = Team::find($id);

        if ($team && $team->photo && file_exists(public_path('photo_team/'.$team->photo))) {
            unlink(public_path('photo_team/'.$team->photo));
        }

        $team->delete();

        return redirect()->back();


    }

    public function read_team(){

        $teams = Team::all();

        return view('admin.team',compact('teams'));
    }

    public function edit_team($id){

        $team = Team::find($id);

        return view('admin.form_edit_team',compact('team'));


    }

    public function update_team(Request $request, $id){

        $team= Team::find($id);

        $team->name = $request->name;
        $team->job = $request->job;
        $team->short_desc = $request->short_desc;
        $team->facebook= $request->facebook;
        $team->linkdlin= $request->linkdlin;
        $team->instagram= $request->instagram;
        $team->twitter= $request->twitter;

        $image = $request->photo;

        If($image){

            unlink('photo_team/'.$team->photo);

            $photoname = time().'.'.$image->getClientOriginalExtension();

            $image->move('photo_team',$photoname);

            $team->photo = $photoname;

        }


        $team->save();

        return redirect()->route('read_team');

    }





}













