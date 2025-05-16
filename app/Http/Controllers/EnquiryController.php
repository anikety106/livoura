<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryMail;

class EnquiryController extends Controller
{
    public function submit(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:1000',
        ]);

        $enquiryData = $request->only(['name', 'email', 'phone', 'message']);

        // Send Email to Admin
        Mail::to('yadavkiran699@gmail.com')->send(new EnquiryMail($enquiryData));

        // // Send Email to User
        // Mail::to($request->email)->send(new EnquiryMail($enquiryData));

        return back()->with('success', 'Your enquiry has been submitted successfully. We will get back to you soon!');
    }
}
