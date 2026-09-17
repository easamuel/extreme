<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * ProductController handles product/service pages
 */
class ProductController extends Controller
{
    /**
     * Display HR Management solution page
     */
    public function hr()
    {
        return view('products.hr', [
            'title' => 'HR Management Solution - ExtremeSolutions',
            'description' => 'Comprehensive HR management platform for businesses to streamline employee management, payroll, and HR processes.',
        ]);
    }

    /**
     * Display School/Education solution page
     */
    public function school()
    {
        return view('products.school', [
            'title' => 'School Management System - ExtremeSolutions',
            'description' => 'Run your whole school from one dashboard — fees, attendance, results, and parent communication, live at sms.extremesolutions.com.ng.',
        ]);
    }

    /**
     * Display ESPass ticketing platform page
     */
    public function espass()
    {
        return view('products.espass', [
            'title' => 'ESPass Ticketing Platform - ExtremeSolutions',
            'description' => 'Sell tickets, manage attendees, and check people in at the door — live at espass.extremesolutions.com.ng.',
        ]);
    }
}

