<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home ()
    {
        return view ('index');
    }

    public function about ()
    {
        return view ('about');
    }

    public function room ()
    {
        return view ('room');
    }
    
    public function facilities ()
    {
        return view ('facilities');
    }

    public function Book ()
    {
        return view ('BookingForm');
    }

    public function View()
    {
        return view ('PresidentialView');
    }

    public function Details()
    {
        return View ('Swimming');
    }

    public function BookingReview()
    {
        return view ('BookingReview');
    }

    public function Review()
    {
        return view ('review');
    }
}
