<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|max:10',
            'content' => 'required|min:10',
        ], [
            'name.required' => __("If you dont'n give me your name, I will not allow you to enter")
        ]);

        Mail::to('2gmurillo@gmail.com')->queue(new MessageReceived($msg));

        return __('The mail has been sent');
    }
}
