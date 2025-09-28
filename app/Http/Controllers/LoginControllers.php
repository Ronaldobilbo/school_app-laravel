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

    public function aunthenticate(Request $request)
    {
        $credentials = $request->only('email, password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'email atau password salah.',
        ]);
    }
}
