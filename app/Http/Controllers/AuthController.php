<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin() {
        $title = "Login User";
        return view('auth/login', compact('title'));
    }
}
