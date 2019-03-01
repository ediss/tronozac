<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
class ContactController extends Controller
{
    public function index(Request $request) {
        $contact_name    = $request->input('contact_name');
        $contact_email   = $request->input('contact_email');
        $contact_message = $request->input('contact_message');

        $request->validate( [
            'contact_name'      =>  'required|',
            'contact_email'     =>  'required|',
            'contact_message'   =>  'required|',
        ]);

        $data = [
            'name'      => $contact_name,
            'email'     => $contact_email,
            'contact_message'   => $contact_message
        ];

        Mail::send('partials.contact-mail', $data, function($message) use ($data) {
            $message->to('tronozact@gmail.com', 'Tronozac.rs')->subject ('Kontakt');
            $message->from($data['email'], $data['name'] );
        });

        Session::flash('success', "$contact_name,  uspešno ste poslali poruku. Odgovorićemo u najbržem mogućem roku. Vaš Tronožac.rs");
        return redirect('/');
    }
}
