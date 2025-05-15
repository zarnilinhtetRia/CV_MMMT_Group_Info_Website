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
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|max:255',
            'phone'  => 'required|string|max:20',
            'remark' => 'nullable|string',
        ]);

        // Save data
        Contact::create([
            'name'   => $request->name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'remark' => $request->remark,
        ]);

        return back()->with('success', 'Your message has been sent successfully.');
    }
}
