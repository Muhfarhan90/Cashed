<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        // memvalidasi data login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'email' => 'Email atau password tidak sesuai'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();

        return redirect('login');
    }
}
