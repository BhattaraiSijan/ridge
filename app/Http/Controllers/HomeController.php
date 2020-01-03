<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    	return view('frontend.home');
    }

    public function about()
    {
    	return view('frontend.pages.about');
    }

    public function service()
    {
    	return view('frontend.pages.service');
    }

    public function project()
    {
    	return view('frontend.pages.projects');
    }

    public function contact()
    {
    	return view('frontend.pages.contact');
    }
}
