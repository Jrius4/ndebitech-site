<?php

namespace App\Http\Controllers\Home;

use App\ClientTestimony;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QuoteRequest;
use App\ServiceCategory;

class HomeController extends Controller
{
    public function admin()
    {
        return view('layouts.backend.admin');
    }

    public function index()
    {
        $categories = ServiceCategory::get();
        $testimonies = ClientTestimony::get();
        return view('home.landing-page.index', compact('categories','testimonies'));
    }


    public function aboutUs()
    {
        return view('home.about-us.index');
    }

    public function contactUs()
    {
        return view('home.contact-us.index');
    }
}
