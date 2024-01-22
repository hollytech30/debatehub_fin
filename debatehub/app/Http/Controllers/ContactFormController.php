<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Models\NewsletterSubscription;


class ContactFormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the form data to the database
        $contactForm = ContactForm::create($validatedData);

        // Return a response, indicating success or failure
        return response()->json(['success' => true, 'data' => $contactForm]);
    }

    public function handleNewsletterSubscription(Request $request) {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');

        // Check if the email already exists
        $existingSubscription = NewsletterSubscription::where('email', $email)->first();

        if ($existingSubscription) {
            // Email already exists, handle accordingly
            return redirect()->back()->with('error', 'This email is already subscribed.');
        }

        // Save the email to the database using the NewsletterSubscription model
        NewsletterSubscription::create(['email' => $email]);

        return redirect()->back()->with('success', 'You have been subscribed to our newsletter!');
    }
}
