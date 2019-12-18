<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
class MailSend extends Controller
{
    public function mailsend()
    {
        $details = [
            'title' => 'Mail from Scholar',
            'body' => ' This is for testing email using smtp'
        ];

        \Mail::to('2017.vinit.motwani@ves.ac.in')->send(new SendMail($details));
        return view('emails.thanks');
    }
}