<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile() {
        $title = "Profile User";
        return view('profile', compact('title'));
    }
}
