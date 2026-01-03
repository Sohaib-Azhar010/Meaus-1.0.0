<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        
        // TODO: Save to database or send email when migrations are set up
        // \App\Models\Contact::create($validated);
        
        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}

