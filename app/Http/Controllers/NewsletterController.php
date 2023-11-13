<?php

namespace App\Http\Controllers;

use App\Models\newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function submitNewsletterForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $newsletterSubscriber = new newsletter();
        $newsletterSubscriber->email = $request->input('email');
        $newsletterSubscriber->created_at = now();
        $newsletterSubscriber->save();

        return redirect('/')->with('success', 'You have been successfully subscribed to our newsletter!');
    }

    public function unsubscribeFromNewsletter(Request $request)
    {
        // implement the logic to unsubscribe from the newsletter based on the mail address the user gave up
    }
}
