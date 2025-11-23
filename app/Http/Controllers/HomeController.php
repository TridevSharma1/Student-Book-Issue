<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Show Library Home Page
    public function index()
    {
        return view('library.home');  // Make sure this blade file exists
    }
}
