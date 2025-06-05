<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('frontend.contactus');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'phone'   => 'required|string',
            'subject' => 'required|string',
            'remark'  => 'nullable|string', // Set to 'required|string' if needed
        ]);

        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'subject' => $request->subject,
            'remark'  => $request->remark,
        ]);

        return back()->with('success', 'Your message has been sent successfully.');
    }
    public function message()
    {
        $message = Contact::all();
        return view('message.message', compact('message'));
    }
}
