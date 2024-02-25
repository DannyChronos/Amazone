<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linksController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function mens()
    {
        return view('mens');
    }
    public function womens()
    {
        return view('womens');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function women()
    {
        return view('women');
    }
}
