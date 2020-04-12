<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function show()
    {
        return view('contact');
    }
    public function store()
    {
        # send the email

        request()->validate(['email'=>'required|email']);
        

       Mail::to(request('email'))
       ->send(new ContactMe('Innovation'));

        return redirect('/contact')
            ->with('message','Email Sent');
    }
}
