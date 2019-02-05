<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function contact(Request $request)
    {
    	return view("contact-us");
    }
    public function services(Request $request)
    {
    	return view('services');
    }

    public function about(Request $request)
    {
    	return view('about');
    }

    public function language(Request $request)
    {
    	return view('language');
    }
}
