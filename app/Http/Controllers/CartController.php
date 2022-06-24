<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart() {
        $title = "Cart";

        return view('cart', compact('title'));
    }
}
