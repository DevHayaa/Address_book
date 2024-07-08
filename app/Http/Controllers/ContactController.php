<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('staticPage.contact');
    }
    public function showForm()
    {
        return view('staticPage.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save contact message to the database
        Contact::create($request->all());

        // Send email notification (optional)
        Mail::to(config('mail.admin_email'))->send(new \App\Mail\ContactFormMail($request->all()));
        toastr()->timeOut(1000)->closeButton()->success('Thank you for contacting us. We will get back to you soon.');
        return redirect()->route('contact.show');
    }
}

