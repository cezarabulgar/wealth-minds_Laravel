<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function submitForm(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'message' => 'required|string',
    ]);

    // Create a new contact record and save it to the database
    Contact::create($validatedData);

    // Return a JSON response indicating success
    return response()->json(['message' => 'Your message has been sent successfully!']);
}
}
