<?php

namespace App\Http\Controllers\admin\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\LoginRequest;

class LoginController extends Controller
{
    public function __contruct() {
        $this->middleware('guest:admin')->except('logout');
        // khi chuyen trang dung except de kh su dung class logout
    }

    public function showLoginForm() {
        return view('admin.auth.login');
    }

    public function credentials(Request $request) {
        $credentials = $request->only('email', 'password');
        $credentials['role'] = 'admin';

        return $credentials;
    }

    public function store(LoginRequest $request) {
        if (Auth::attempt($this->credentials($request), $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        return back()->with([
            'msg' => 'This account does not have access'
         ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.auth.login');
    }
}
