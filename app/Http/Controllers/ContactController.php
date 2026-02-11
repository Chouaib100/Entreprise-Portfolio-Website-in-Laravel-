<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function read_contact(){

        $contacts = Contact::all();

        return view('admin.contact',compact('contacts'));
    }

    public function edit_contact($id){

        $contact = Contact::find($id);

        return view('admin.form_edit_contact',compact('contact'));


    }

    public function update_contact(Request $request, $id){

        $contact= Contact::find($id);

        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->map = $request->map;


        $contact->save();

        return redirect()->route('read_contact');

    }

}
