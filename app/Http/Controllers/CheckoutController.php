<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showCheckout() {
        $title = 'Checkout';

        return view('checkout', compact('title'));
    }
}
