<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormSend;
use Illuminate\Support\Facades\Mail;

class ContactformController extends Controller
{
    public function submitForm(Request $request)
    {
        $this->validate($request, [
            "contactText"=> "required|string",
            "title"=> "required|string|max:255",
            "email"=> "required|email",
            "name"=> "required|string",
        ]);

            $formData = [
                'contactText' => $request->input('contactText'),
                'title' => $request->input('title'),
                'email' => $request->input('email'),
                'name' => $request->input('name'),
            ];

        try {
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactFormSend($formData));

            // Success message
            return redirect('/contact')->with('success', 'Verstuurd! Wij doen ons best om zo snel mogelijk te reageren.');
        } catch (\Throwable $th) {
            return redirect('/contact')->with('error', 'Er is iets mis gegaan. Probeer het later nog eens.\nFoutmelding: '.$th->getMessage());
        }
    }
}
