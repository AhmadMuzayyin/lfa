<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('backpage.auth.login');
    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect('admin/dashboard');
        }
        return to_route('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
