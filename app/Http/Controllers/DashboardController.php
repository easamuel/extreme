<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * DashboardController handles the authenticated user dashboard
 * Authentication is handled by middleware in routes/web.php
 */
class DashboardController extends Controller
{
    /**
     * Display the dashboard
     */
    public function index()
    {
        return view('dashboard');
    }
}

