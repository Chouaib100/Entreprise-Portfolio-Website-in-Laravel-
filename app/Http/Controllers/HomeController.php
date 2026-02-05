<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //
    public function readhome()
    {
        $homes = Home::all();
        return view('admin.home', compact('homes'));
    }
}
