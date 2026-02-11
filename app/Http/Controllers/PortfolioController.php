<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function show_portfolio(){


        $portfolios = Portfolio::all();


    }

    public function add_portfolio(){

        return view('admin.form_add_portfolio');
    }

    public function create_portfolio(Request $request){

        $portfolio = new Portfolio;


        $portfolio->title = $request->title;
        $portfolio->short_desc = $request->short_desc;
        $portfolio->link = $request->link;


        $image = $request->photo;

        $photoname = time().'.'.$image->getClientOriginalExtension();

        $image->move('photo_project',$photoname);

        $portfolio->photo = $photoname;


        $portfolio->save();

        return redirect()->route('read_portfolio');

    }

    public function delete_portfolio($id){

        $portfolio = Portfolio::find($id);

        unlink('photo_project/'.$portfolio->photo);

        $portfolio->delete();

        return redirect()->back();


    }

    public function read_portfolio(){

        $portfolios = Portfolio::all();

        return view('admin.portfolio',compact('portfolios'));
    }

    public function edit_portfolio($id){

        $portfolio = Portfolio::find($id);

        return view('admin.form_edit_portfolio',compact('portfolio'));


    }

    public function update_portfolio(Request $request, $id){

        $portfolio= Portfolio::find($id);

        $portfolio->title = $request->title;
        $portfolio->short_desc = $request->short_desc;
        $portfolio->link = $request->link;

        $image = $request->photo;

        If($image){

            unlink('photo_project/'.$portfolio->photo);

            $photoname = time().'.'.$image->getClientOriginalExtension();

            $image->move('photo_project',$photoname);

            $portfolio->photo = $photoname;

        }


        $portfolio->save();

        return redirect()->route('read_portfolio');

    }
}







