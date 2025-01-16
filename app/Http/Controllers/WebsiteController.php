<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //index
    public function index()
    {
        return view('index');
    }   

    //about
    public function about()
    {
        return view('about');
    }

    //contact
    public function contact()
    {
        return view('contact');
    }
}
