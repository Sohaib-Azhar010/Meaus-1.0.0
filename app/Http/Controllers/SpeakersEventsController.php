<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeakersEventsController extends Controller
{
    public function index()
    {
        return view('pages.speakers-events');
    }
}

