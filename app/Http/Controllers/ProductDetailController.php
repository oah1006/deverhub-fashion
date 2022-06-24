<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function showDetail() {
        $title = "Product Detail";
        return view('product-detail', compact('title'));
    }
}
