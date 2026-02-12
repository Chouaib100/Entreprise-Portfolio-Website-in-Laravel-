<?php

namespace App\Http\Controllers;

use App\Models\FormContact;

use Illuminate\Http\Request;

class FormContactController extends Controller
{
    public function create_formcontact(Request $request){

        $formcontact = new FormContact;


        $formcontact->name = $request->name;
        $formcontact->email = $request->email;
        $formcontact->subject = $request->subject;

        $formcontact->message = $request->message;


        $formcontact->save();

        return redirect()->route('show_home');
    }

    public function delete_formcontact($id){

        $formcontact = FormContact::find($id);

        $formcontact->delete();

        return redirect()->back();

    }

    public function read_formcontact(){

        $formcontacts = FormContact::all();

        return view('admin.formcontact',compact('formcontacts'));
    }

    public function detail_formcontact($id){

        $formcontacts = FormContact::find($id);

        return view('admin.formcontact_detail',compact('formcontacts'));
    }
}
