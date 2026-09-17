<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * HomeController handles the main landing page and public pages
 */
class HomeController extends Controller
{
    /**
     * Display the home page
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display the tech mentorship / training program page
     */
    public function academy()
    {
        return view('academy');
    }
}

