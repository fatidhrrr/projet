<?php

namespace App\Http\Controllers;

use App\Mail\Contactmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Contact;

class MailController extends Controller
{
    public function store(Request $request)
    {
        $contact = new Contact();
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $message = $request->input('message');
        $password = $request->input('password');
        $contact->nom = $nom;
        $contact->prenom = $prenom;
        $contact->email = $email;
        $contact->message = $message;
        $contact->password = $password;
        Mail::to('dhrfatima12@gmail.com')->send(new Contactmail($nom, $prenom, $email, $message));
        $contact->save();
        return redirect()->back();
    }
}
