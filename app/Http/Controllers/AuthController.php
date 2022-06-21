<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin() {
        $title = "Login Account";
        return view('auth/login', compact('title'));
    }


    public function showRegister() {
        $title = "Register Account";
        return view('auth/register', compact('title'));
    }
}
