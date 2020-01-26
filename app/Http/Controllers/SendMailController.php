<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class SendMailController extends Controller
{
    public function index()
    {
        return view('contact-us');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'message' => $request->message
        );

        Mail::to('capitaldesign4@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}