<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Home;

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

    public function edit_home($id)
    {
        $home = Home::findOrFail($id);
        return view('admin.edit_home', compact('home'));
    }

    public function update_home(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_desc' => 'required|string',
            'video_channel' => 'required|string|max:255',
        ]);

        $home = Home::findOrFail($id);
        $home->update($validated);

        return redirect()->route('read_home')->with('success', 'Home record updated successfully!');
    }
}
