<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function showDetail() {
        $title = "Catalog Detail";
        return view('catalog-detail', compact('title'));
    }
}
