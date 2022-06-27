<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showUsers() {
        $title = 'List Users';

        return view('admin.users', compact('title'));
    }
}
