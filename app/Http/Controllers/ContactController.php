<?php

namespace App\Http\Controllers;

use App\Mail\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function Contact(){
        return view('Contact.contact');
  }


  public function sendmail(Request $request){
    // return $request->all();
    Mail::to($request->email)->send(new Contactus($request->toArray()));
    return redirect()->route('contact');
  }
}
