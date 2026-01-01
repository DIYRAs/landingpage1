<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function email(Request $request)
    {
        $request->validate([
            'email_message' => 'required'
        ]);

        Mail::to('lepeger628@gmail.com')
            ->send(new ContactMail($request->email_message));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
