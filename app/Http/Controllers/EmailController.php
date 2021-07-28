<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'title' => $request->title,
            'body' => $request->message,
            'subject' => $request->subject
        ];
    
        \Mail::to($request->emailTo)->send(new \App\Mail\Mailer($details));
    
        return redirect()->intended(route('index'));
    }
}
