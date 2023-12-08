<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_controller extends Controller
{
    public function login_page() {
        return view('dashboard', [
            'username' => auth()->user()->username,
        ]);
    }
}
