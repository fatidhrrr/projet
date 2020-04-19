<?php

namespace App\Http\Controllers;

use App\Mail\Contactmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $message = $request->input('message');
        Mail::to('dhrfatima12@gmail.com')->send(new Contactmail($nom, $prenom, $email, $message));
        return redirect()->back();
    }
}
