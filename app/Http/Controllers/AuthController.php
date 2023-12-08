<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->only(["email","password"]));
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, arahkan ke halaman dashboard
            return redirect()->route('dashboard');
        }

        // Jika autentikasi gagal, arahkan kembali ke halaman login dengan pesan error
        return redirect('/')->with('login_failed', 'Invalid credentials. Please try again.');
    }
}

