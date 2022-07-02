<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $title = 'List User';
        $users = User::query();

        if ($request->filled('keywords')) {
            $q = $request->keywords;
            $users->where(function($query) use ($q) {
                $query->where('email', 'like', '%'. $q . '%')
                    ->orWhere('first_name', 'like', '%'. $q . '%')
                    ->orWhere('last_name', 'like', '%'. $q . '%');
            });
        }

        if ($request->filled('role')) {
            $role = $request->role;
            $users->where('role', $role);
        }

        if ($request->filled('gender')) {
            $gender = $request->gender;
            $users->where('gender', $gender);
        }

        
        $users = $users->paginate(3)->withQueryString();

        return view('admin.user.index', compact('title', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create User';

        return view('admin.user.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
        ]);

        $user->save();
        return redirect()->route('admin.users.index')->with('msg', 'Add user successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $title = 'Detail user';
        $user = User::find($id);
        

        return view('admin.user.detail', compact('user', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit user";
        
        $user = User::find($id);

        return view('admin.user.edit', compact('title', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id)->update([
            'role' => $request->role,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
        ]);

        return back()->with('msg', 'Update user successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('admin.users.index')->with('msg', 'Delete Product successfully!');
    }

    public function destroyAll() {
        User::truncate();

        return back()->with('msg', 'Delete All successfully!');
    }
}
