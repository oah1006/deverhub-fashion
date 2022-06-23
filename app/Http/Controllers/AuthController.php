<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginAccountRequest;
use App\Http\Requests\RegisterAccountRequest;

class AuthController extends Controller
{
    public function showLogin()
    {
        $title = "Login Account";
        return view('auth/login', compact('title'));
    }

    public function loginAccount(LoginAccountRequest $request) {
        $checkAccount = $request->validated();

        $account = User::where('email', $request->email)->first();

        $informationAccount = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $rememberAccount = false;
        if ($request->remember) {
            $rememberAccount = true;
        }

        if (Auth::attempt($informationAccount, $rememberAccount)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->withErrors([
           'email' => 'The provided credentials do not match our records',
           'password' => 'The provided credentials do not match our records'
        ]);

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

    public function logoutAccount(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
