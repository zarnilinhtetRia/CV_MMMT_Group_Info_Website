<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $role = $request->input('login_role');

        if (Auth::attempt($credentials)) {
            // You can add role-based redirection or checks here
            if ($role === 'admin' && Auth::user()->role !== 'admin') {
                Auth::logout();
                return redirect('/adminlogin')->withErrors(['email' => 'Not authorized as admin.']);
            }

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
}
