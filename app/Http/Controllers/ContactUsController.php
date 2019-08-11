<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact() {
        return view('info.contact');
    }

    public function contactSend() {
        $body = '';
        $res =  \Mail::raw($body, function($message)
        {
            $message->from('anzhela.testmail@gmail.com', 'anzhela.testmail@gmail.com');

            $message->to('kondratieva.anzhelika92@gmail.com');
        });
        return redirect(route('contact'))->with('success','You successfully sent your message!');
    }

}
