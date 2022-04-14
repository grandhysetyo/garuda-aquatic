<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backoffice.dashboard');
    }

    public function slider()
    {
        return view('backoffice.slider');
    }    
}
