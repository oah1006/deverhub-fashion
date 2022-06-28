@extends('admin.layouts.guest')

@section('title', $title)


@section('content')

    <div class="bg-zinc-200 grow lg:px-10 lg:py-6">
        <div class="flex items-center">
            <p class="text-3xl">{{ $title }}</p>
            <a href="{{ url()->previous() }}" class="px-3 py-2 bg-blue-800 rounded-lg text-white text-lg ml-auto">Back</a>
        </div>

        <form method="POST" class="bg-white w-full mt-10 px-10 py-6">
            <p class="text-3xl font-medium">Create User</p>
            <div class="mt-4 mb-3">
                <p>Email</p>
                <input type="text" name="email" placeholder="Email" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('email')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Password</p>
                <input type="password" name="password" placeholder="Password" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('password')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div> 
            <div class="mt-4 mb-3">
                <p>Role</p>
                <select name="role" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    <option selected>Role</option>
                    <option value="admin">Admin</option>
                    <option value="customer">User</option>
                </select>
                @error('role')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>First name:</p>
                <input type="text" name="first_name" placeholder="First Name" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('first_name')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Last name:</p>
                <input type="text" name="last_name" placeholder="Last Name" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('last_name')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Gender</p>
                <select name="gender" class="form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    <option selected>Gender</option>
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                    <option value="2">Others</option>
                </select>
                @error('gender')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-8">
                <button type="submit" class="w-full py-2 bg-zinc-800 rounded-lg text-white font-medium text-3xl">Submit</button>
            </div>
            @csrf
        </form>
    </div>

@endsection