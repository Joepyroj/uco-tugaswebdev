<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Part\TextPart;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }


    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('ffahreza@student.ciputra.ac.id')
                    ->subject('Contact Us Form Submission')
                    ->text($data['message']); // Set the message as plain text
        });

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
