<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailtoMyTeam;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function create_subscriber(Request $request){

        $request->validate([

            'email'=>'required|unique:subscribers|email',

        ]);

        $subscriber = New Subscriber;

            $subscriber->email=$request->email;

            $subscriber->save();

            return redirect()->route('show_home');

    }

    public function delete_subscriber($id){

        $subscriber = Subscriber::find($id);

        $subscriber->delete();

        return redirect()->back();


    }

    public function read_subscriber(){

        $subscribers = Subscriber::all();

        return view('admin.subscriber',compact('subscribers'));
    }

    public function write_to_one_subscriber($id){

        $subscriber = Subscriber::find($id);

        return view('admin.subscriber_write_mail_to_one',compact('subscriber'));
   }

   public function send_mail_to_one_subscriber(Request $request){

       $request->validate([

           'subject'=>'required|max:800',
           'message'=>'required|max:800'

       ],

       [

           'subject.required'=>'You must type subject Please',
           'message.required'=>'You must type message Please'

       ]);

       $email = $request->email;
       $subject = $request->subject;
       $mes = $request->message;



 Mail::to($email)->send(new SendMailtoMyTeam($mes,$subject));

  return redirect()->route('read_subscriber');


  }

  public function write_to_all_subscriber(){

   return view('admin.subscriber_write_mail_to_all');
  }

  public function send_mail_to_all_subscriber(Request $request){

   $request->validate([

       'subject'=>'required|max:800',
       'message'=>'required|max:800'

   ],

   [

       'subject.required'=>'You must type subject Please',
       'message.required'=>'You must type message Please'

   ]);



   $subject = $request->subject;
   $mes = $request->message;

   $subscribers = Subscriber::All();

   foreach($subscribers as $subscriber){

       Mail::to($subscriber->email)->send(new SendMailtoMyTeam($mes,$subject));

   }


   return redirect()->route('read_subscriber');




  }

}
