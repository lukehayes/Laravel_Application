<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * The home view for the dashboard that shows once the 
     * user has logged in.
     */
    public function index()
    {
        if(Auth::check())
        {
            return view('dashboard.index');
        }else {
            return view('login');
        }
    }
}
