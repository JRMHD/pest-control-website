<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $contact = Contact::create($validatedData);

        Mail::to('info.hyperverm@gmail.com')->send(new ContactMail($contact));

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon.');
    }
}
