<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    
    // Public pages
   public function index()
{
    return view('index');
}

public function aboutUs()
{
    return view('about-us');
}

public function blog()
{
    return view('blog');
}

public function contact()
{
    return view('contact');
}

public function pricing()
{
    return view('pricing');
}

public function privacy()
{
    return view('privacy');
}



public function sample()
{
    return view('sample');
}

public function services()
{
    return view('services');
}

public function serviceDetail()
{
    return view('service-detail');
}

public function tnc()
{
    return view('tnc');
}

public function tracker()
{
    return view('tracker');
}
public function register()
{
    return view('auth.register');
}

public function login()
{
    return view('auth.login');
}
}

