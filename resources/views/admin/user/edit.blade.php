@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

    <div class="bg-zinc-200 grow lg:px-10 lg:py-6">
        <div class="flex items-center">
            <p class="text-3xl">{{ $title }}</p>
            <a href="{{ route('admin.users.index') }}" class="px-3 py-2 bg-blue-800 rounded-lg text-white text-lg ml-auto">Back</a>
        </div>

        @if (session('msg'))
            <div class="bg-blue-200 text-blue-800 w-full px-4 py-3 rounded-lg my-3">{{ session('msg') }}</div>
        @endif

        <form action="{{ route('admin.users.update', ['id' => $user->id])  }}" method="POST" class="bg-white w-full mt-10 px-10 py-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <p class="text-3xl font-medium">{{$title}}</p>
                <a onclick="return confirm('Are you sure you want to delete this user?')" href="{{ route('admin.users.destroy', ['id' => $user->id]) }}" class="bg-red-600 text-white font-medium rounded-lg py-1 px-4 ml-auto text-center">Delete</a>
            </div>
            <div class="mt-4 mb-3">
                <p>Role</p>
                <select name="role" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    <option selected>Role</option>
                    <option value="admin" @selected($user->role == 'admin')>Admin</option>
                    <option value="customer" @selected($user->role == 'customer')>User</option>
                </select>
                @error('role')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>First name:</p>
                <input value="{{ old('first_name') ?? $user->first_name }}" type="text" name="first_name" placeholder="First Name" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('first_name')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Last name:</p>
                <input value="{{ old('last_name') ?? $user->last_name }}" type="text" name="last_name" placeholder="Last Name" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('last_name')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Gender</p>
                <select name="gender" class="form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    <option selected>Gender</option>
                    <option value="0" @selected($user->gender == '0')>Male</option>
                    <option value="1" @selected($user->gender == '1')>Female</option>
                    <option value="2" @selected($user->gender == '2')>Others</option>
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