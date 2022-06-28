<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\LoginRequest;

class LoginController extends Controller
{
    public function __contruct() {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm() {
        $title = 'Login account';
        return view('auth.login', compact('title'));
    }

    public function credentials(Request $request) {
        $credentials = $request->only('email', 'password');
        $credentials['role'] = 'customer';

        return $credentials;
    }

    public function store(LoginRequest $request) {
        if (Auth::attempt($this->credentials($request), $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->with([
            'msg' => 'The account does not exist yet'
         ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

}
