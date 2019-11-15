<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function admin()
    {
        return view('layouts.backend.admin');
    }

    public function index()
    {
        return view('home.landing-page.index');
    }

    public function contactUs()
    {

    }
}
