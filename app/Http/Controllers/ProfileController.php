<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile() {
        $title = "Profile User";
        return view('profile', compact('title'));
    }


    public function showChangePassword() {
        $title = "Change Password";
        return view('change-password', compact('title'));
    }

    public function showDeliveryAddress() {
        $title = "Delivery Address";
        return view('delivery-address', compact('title'));
    }
}
