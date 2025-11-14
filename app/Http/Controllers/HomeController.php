<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function privacyPolicy()
    {
        return view('client.privacy-policy');
    }

    public function termsOfService()
    {
        return view('client.terms-of-service');
    }

    public function blog()
    {
        return view('client.blog');
    }

    public function contact()
    {
        return view('client.contact');
    }
}
