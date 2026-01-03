<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('pages.appointment');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'department' => 'required|string',
            'doctor' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|string',
            'time' => 'required|string',
        ]);
        
        // TODO: Save to database when migrations are set up
        // \App\Models\Appointment::create($validated);
        
        return redirect()->route('appointment')->with('success', 'Your appointment has been booked successfully! We will contact you soon.');
    }
}

