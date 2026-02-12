<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailtoMyTeam;
use App\Models\Candidate;

class CandidateController extends Controller
{


    public function add_candidate(){

        return view('frontend.candidates');
    }

    public function create_candidate(Request $request){

        $candidate = new Candidate;

        $request->validate([

            'name'=>'required|min:3|max:30',
            'job'=>'required|min:3|max:100',
            'phone'=>'required|max:14',
            'email'=>'required|unique:candidates|email',
            'address'=>'required|max:200',
            'photo'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
            'pdfresume'=>'required|mimes:pdf|max:10024',
            'videocandidate'=>'required|mimes:mp4|max:50024',

        ],

        [

            'name.required'=>'You must type your name Please',
            'job.required'=>'You must type your job Please',
            'phone.required'=>'You must type your phone Please',
           'email.required'=>'You must type your email Please',
            'address.required'=>'You must type your address Please',
            'photo.required'=>'You must upload your photo Please',
            'pdfresume.required'=>'You must upload your pdf resume Please',
            'videocandidate.required'=>'You must upload your mp4 video Please',

        ]





       );

        $candidate->name = $request->name;
        $candidate->job = $request->job;
        $candidate->phone = $request->phone;
        $candidate->email = $request->email;
        $candidate->address = $request->address;

//image
        $image = $request->photo;

        $photoname = time().'.'.$image->getClientOriginalExtension();

        $image->move('photocandidates',$photoname);

        $candidate->photo = $photoname;

//pdf

        $pdfresume = $request->pdfresume;

        $pdfresumename = time().'.'.$pdfresume->getClientOriginalExtension();

        $pdfresume->move('pdfcandidates',$pdfresumename);

        $candidate->pdfresume = $pdfresumename;

//video

        $videocandidate = $request->videocandidate;

        $videocandidatename = time().'.'.$videocandidate->getClientOriginalExtension();

        $videocandidate->move('videocandidates',$videocandidatename);

        $candidate->videocandidate = $videocandidatename;


        $candidate->save();

        return redirect()->route('show_home')->with('success','Your resume is sent successfully!');




    }

    public function read_candidate(){


        $candidates = Candidate::all();

        return view('admin.candidates', compact('candidates'));
    }

    public function delete_candidate($id){

        $candidate = Candidate::find($id);

       unlink('photocandidates/'.$candidate->photo);
       unlink('pdfcandidates/'.$candidate->pdfresume);
       unlink('videocandidates/'.$candidate->videocandidate);

        $candidate->delete();

        return redirect()->back();


    }

    public function edit_candidate($id){

        $candidate = Candidate::find($id);

        return view('admin.candidate_edit',compact('candidate'));


    }

    public function update_candidate(Request $request, $id){

        $candidate= Candidate::find($id);

        $candidate->name = $request->name;
        $candidate->job = $request->job;
        $candidate->phone = $request->phone;
        $candidate->email = $request->email;
        $candidate->address = $request->address;

        $image = $request->photo;
        $pdf = $request->pdfresume;
        $video = $request->videocandidate;
//Image
        If($image){

            unlink('photocandidates/'.$candidate->photo);

            $photoname = time().'.'.$image->getClientOriginalExtension();

            $image->move('photocandidates',$photoname);

            $candidate->photo = $photoname;

        }
//Pdf
        If($pdf ){

            unlink('pdfcandidates/'.$candidate->pdfresume);

            $pdfresumename = time().'.'.$pdf->getClientOriginalExtension();

            $pdf->move('pdfcandidates',$pdfresumename);

            $candidate->pdfresume = $pdfresumename;

        }
//video
        If($video){

            unlink('videocandidates/'.$candidate->videocandidate);

            $videocandidatename = time().'.'.$video->getClientOriginalExtension();

            $video->move('videocandidates',$videocandidatename);

            $candidate->videocandidate = $videocandidatename;

        }

        $candidate->save();

        return redirect()->route('read_candidate')->with('success','Your resume is updated successfully!');

    }

    public function search_candidate(Request $request){

        $search = $request->search;

        $candidates = Candidate::where('job','LIKE','%'.$search.'%')->get();

        return view('admin.candidate_search',compact('candidates'));
    }

    public function pdfdownload_candidate($pdfdownload){

    $pdfcandidate = Candidate::find($pdfdownload);

    return response()->download('pdfcandidates/'.$pdfcandidate->pdfresume);

    }

    public function videocandidate_candidate($videocandidate){

        $videocandidatecandidate = Candidate::find($videocandidate);

        $videocandidate_candidate = $videocandidatecandidate->videocandidate;

        return view('admin.candidate_video',compact('videocandidate_candidate'));

    }

    public function write_to_one($id){

        $candidate = Candidate::find($id);

        return view('admin.candidate_write_mail_to_one',compact('candidate'));
    }

   public function send_mail_to_one(Request $request){

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

    return redirect()->route('read_candidate');


    }

    public function write_to_all(){

    return view('admin.candidate_write_mail_to_all');
    }

    public function send_mail_to_all(Request $request){

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

    $candidates = Candidate::All();

    foreach($candidates as $candidate){

        Mail::to($candidate->email)->send(new SendMailtoMyTeam($mes,$subject));

    }

    return redirect()->route('read_candidate');

    }


}
