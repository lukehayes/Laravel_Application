<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * The home view for the dashboard that shows once the 
     * user has logged in.
     */
    public function index()
    {
        return view('dashoard.index');
    }
}
