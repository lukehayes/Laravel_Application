<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $validationRules = $request->validate([
            'email' => 'required|min:5',
            'password' => 'required|min:5',
        ]);

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }
    }
}
