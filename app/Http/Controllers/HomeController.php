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
}
