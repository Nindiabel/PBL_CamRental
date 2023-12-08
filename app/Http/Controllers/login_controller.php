<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login_controller extends Controller
{
    public function validasi_login(Request $request) {
        $data_validasi = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required'],
            'password' => ['required', 'max:255'],
        ]);
        if (Auth::attempt($data_validasi)) {
            $request->session()->regenerate();
            return redirect()->intended('/index-admin');
        } else {
            return back()->with('login_failed', 'Login Gagal.');
        }
    }
}
