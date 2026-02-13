<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailtoMyTeam;
use App\Models\Candidate;

class CandidateController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except(['add_candidate', 'create_candidate']);
    }
    public function add_candidate(){

        return view('frontend.candidates');
    }

    public function create_candidate(Request $request){

        $candidate = new Candidate;

        $request->validate([

            'name'=>'required|min:3|max:30',
            'photo'=>'required|image|mimes:jpg,png,jpeg,gif|max:2048',
            'pdfresume'=>'required|mimes:pdf|max:5120',
            'videocandidate'=>'required|mimes:mp4|max:20480',
            'address'=>'required|max:200',
            'photo'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
            'pdfresume'=>'required|mimes:pdf|max:10024',
            'videocandidate'=>'required|mimes:mp4|max:50024',

        ],

        [

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $photoname = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('photocandidates'), $photoname);
            $candidate->photo = $photoname;
        }
            'videocandidate.required'=>'You must upload your mp4 video Please',

        if ($request->hasFile('pdfresume')) {
            $pdfresume = $request->file('pdfresume');
            $pdfresumename = time() . '_' . uniqid() . '.' . $pdfresume->getClientOriginalExtension();
            $pdfresume->move(public_path('pdfcandidates'), $pdfresumename);
            $candidate->pdfresume = $pdfresumename;
        }

        $candidate->name = $request->name;
        if ($request->hasFile('videocandidate')) {
            $videocandidate = $request->file('videocandidate');
            $videocandidatename = time() . '_' . uniqid() . '.' . $videocandidate->getClientOriginalExtension();
            $videocandidate->move(public_path('videocandidates'), $videocandidatename);
            $candidate->videocandidate = $videocandidatename;
        }

        $photoname = time().'.'.$image->getClientOriginalExtension();

        $image->move('photocandidates',$photoname);

        $candidate->photo = $photoname;

        $candidates = Candidate::latest()->paginate(15);
        return view('admin.candidates', compact('candidates'));
        $pdfresume = $request->pdfresume;

        $pdfresumename = time().'.'.$pdfresume->getClientOriginalExtension();
        $candidate = Candidate::find($id);
        if ($candidate) {
            $this->deleteFile('photocandidates', $candidate->photo);
            $this->deleteFile('pdfcandidates', $candidate->pdfresume);
            $this->deleteFile('videocandidates', $candidate->videocandidate);
            $candidate->delete();
        }
        return redirect()->back();
        $videocandidatename = time().'.'.$videocandidate->getClientOriginalExtension();

        $videocandidate->move('videocandidates',$videocandidatename);

        $candidate->videocandidate = $videocandidatename;


        $candidate->save();

        return redirect()->route('show_home')->with('success','Your resume is sent successfully!');
        $image = $request->file('photo');
        $pdf = $request->file('pdfresume');
        $video = $request->file('videocandidate');

    }
        if ($request->hasFile('photo')) {
            $this->deleteFile('photocandidates', $candidate->photo);
            $photoname = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('photocandidates'), $photoname);
            $candidate->photo = $photoname;
        }

        $candidate = Candidate::find($id);
        if ($request->hasFile('pdfresume')) {
            $this->deleteFile('pdfcandidates', $candidate->pdfresume);
            $pdfresumename = time() . '_' . uniqid() . '.' . $pdf->getClientOriginalExtension();
            $pdf->move(public_path('pdfcandidates'), $pdfresumename);
            $candidate->pdfresume = $pdfresumename;
        }
    }

        if ($request->hasFile('videocandidate')) {
            $this->deleteFile('videocandidates', $candidate->videocandidate);
            $videocandidatename = time() . '_' . uniqid() . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('videocandidates'), $videocandidatename);
            $candidate->videocandidate = $videocandidatename;
        }

        $candidate= Candidate::find($id);

        $candidate->name = $request->name;
        $candidate->job = $request->job;
        $candidate->phone = $request->phone;
        $candidate->email = $request->email;
    $pdfcandidate = Candidate::find($pdfdownload);
    if (!$pdfcandidate || !$pdfcandidate->pdfresume) {
        abort(404);
    }

    $path = public_path('pdfcandidates/' . $pdfcandidate->pdfresume);
    if (!file_exists($path)) {
        abort(404);
    }

    return response()->download($path);
        $image = $request->photo;
        $pdf = $request->pdfresume;
    /**
     * Delete a file in public folder if it exists.
     */
    private function deleteFile(string $folder, ?string $filename)
    {
        if (!$filename) return;
        $path = public_path(trim($folder, '/') . '/' . $filename);
        if (file_exists($path)) {
            @unlink($path);
        }
    }
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
