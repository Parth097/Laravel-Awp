<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create () { //this function simply returns the view create within the contacts folder

        return view('contact.create');
    }

    public function store () { // this function is used to validate/redirect/send mails

        $data = request()-> validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',

        ]);

        Mail::to('admin@carsocial.com')->send(new ContactFormMail($data));

        return redirect('contact')->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
