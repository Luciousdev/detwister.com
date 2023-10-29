<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ContactformController extends Controller
{
    public function submitForm(Request $request)
    {
        try {
            dd($request);
            $this->validate($request, [
                "contactText"=> "required|string",
                "title"=> "required|string|max:200",
                "email"=> "required|email",
                "name"=> "required|string|max:100",
            ]);



            $formData = [
                'contactText' => $request->input('contactText'),
                'title' => $request->input('title'),
                'email' => $request->input('email'),
                'name' => $request->input('name'),
            ];


            // SendEmail::dispatch($formDataEmail)->onQueue('emails');
            DB::table('contact')->insert($formData);

            // Success message
            return redirect('/contact')->with('success', 'Verstuurd! Wij doen ons best om zo snel mogelijk te reageren.');
        } catch (\Throwable $th) {
            return redirect('')->with('error', $th->getMessage());
        }
    }
}
