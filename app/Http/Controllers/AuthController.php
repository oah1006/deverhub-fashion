<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterAccountRequest;

class AuthController extends Controller
{
    public function showLogin()
    {
        $title = "Login Account";
        return view('auth/login', compact('title'));
    }


    public function showRegister()
    {
        $title = "Register Account";
        return view('auth/register', compact('title'));
    }

    public function createAccount(RegisterAccountRequest $request)
    {
        $checkAccount = $request->validated();
        $checkAccount['password'] = Hash::make($checkAccount['password']);

        $user = User::create($checkAccount);
        Auth::login($user);

        return redirect()->route('home');
    }
}
