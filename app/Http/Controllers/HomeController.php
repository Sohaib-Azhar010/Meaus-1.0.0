<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    
    public function blog()
    {
        return view('pages.blog');
    }
    
    public function blogDetail($id)
    {
        return view('pages.detail', compact('id'));
    }
    
    public function team()
    {
        return view('pages.team');
    }
    
    public function testimonial()
    {
        return view('pages.testimonial');
    }
    
    public function search(Request $request)
    {
        return view('pages.search');
    }
}

