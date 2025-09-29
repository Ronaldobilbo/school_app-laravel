<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControllers extends Controller
{
    public function ShowLoginForm()
    {
        return view('layouts.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->filled('remember');

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'email atau password salah.',
        ]);
    }
}
