<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\RegisterAccountRequest;

class RegisterController extends Controller
{
    public function showRegisterForm() {
        $title = 'Register account';
        return view('auth.register', compact('title'));
    }

    public function store(RegisterAccountRequest $request) {
        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);
        $data['role'] = 'customer';
        
        $user = User::create($data);

        Auth::login($user);

        return redirect()->route('home');
    }

}
