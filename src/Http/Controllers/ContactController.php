<?php

namespace Mishajib\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Mishajib\Contact\Models\Contact;
use Mishajib\Contact\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMail($request->message, $request->name));
        Contact::create($request->all());
        return back();
    }
}
