<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function showUsers() {
        $title = 'List Users';

        $users = User::all();

        return view('admin.user.index', compact('title', 'users'));
    }

    public function showCreate() {
        $title = 'Create User';
        return view('admin.user.create', compact('title'));
    }

    public function create(UserRequest $request) {
        $user = User::create([
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
        ]);

        $user->save();
        
        return redirect()->route('admin.users.index')->with('msg', 'Add user successfully!');
    }
}
