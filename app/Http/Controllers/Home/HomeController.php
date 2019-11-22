<?php

namespace App\Http\Controllers\Home;

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
        return view('home.landing-page.index', compact('categories'));
    }

    public function contactUs()
    {

    }
}
