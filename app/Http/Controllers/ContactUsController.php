<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    public function contact() {
        $contactUs = ContactUs::all();
        return view('info.contact', ['contactUs' => $contactUs]);
    }

    public function contactSend(Request $request) {
        $contactUs = new ContactUs;
        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->message = $request->message;
        $contactUs->user_id = $request->user_id;

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $contactUs->save();
        $body = 'You successfully send your message. Wait for our reply!';
        $res =  \Mail::raw($body, function($message)
        {
            $message->from('anzhela.testmail@gmail.com', 'anzhela.testmail@gmail.com');

            $message->to('kondratieva.anzhelika92@gmail.com');
        });
        return redirect(route('contact', ['contactUs' => $contactUs]))->with('success','You successfully sent your message!');
    }

}
