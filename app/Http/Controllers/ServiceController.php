<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function show_service(){


        $services = Service::all();


    }

    public function add_service(){

        return view('admin.form_add_service');
    }

    public function create_service(Request $request){

        $service = new Service;


        $service->title = $request->title;
        $service->short_desc = $request->short_desc;
        $service->icone = $request->icone;


        $service->save();

        return redirect()->route('read_service');
    }

    public function delete_service($id){

        $service = Service::find($id);

        $service->delete();

        return redirect()->back();


    }

    public function read_service(){

        $services = Service::all();

        return view('admin.service',compact('services'));
    }

    public function edit_service($id){

        $service = Service::find($id);

        return view('admin.form_edit_service',compact('service'));


    }

    public function update_service(Request $request, $id){

        $service= Service::find($id);

        $service->title = $request->title;
        $service->short_desc = $request->short_desc;
        $service->icone = $request->icone;


        $service->save();

        return redirect()->route('read_service');

    }


}




