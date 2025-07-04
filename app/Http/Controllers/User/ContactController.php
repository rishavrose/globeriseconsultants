<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{

    function contactview()
    {
        return view('pages.contact');
    }
    public function send(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Mail::send('emails.contact', $data, function($message) use ($data) {
        $message->to('your-email@example.com')
                ->subject('New Contact Form Message from ' . $data['name']);
    });

    return back()->with('success', 'Your message has been sent successfully!');
}

}