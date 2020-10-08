<?php

namespace irfanullahshakir\Contact\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use irfanullahshakir\Contact\Models\Contact;

use irfanullahshakir\Contact\Mail\ContactMailable;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function save(Request $request)
    {
        Mail::to(config('contact.send_email_to'))
            ->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
