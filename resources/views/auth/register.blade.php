@extends('layouts.master', ['footer' => true])

@section('title', $title)

@section('content')
    <div class="w-full bg-zinc-100 h-screen pt-10">
        <div class="flex bg-white rounded-lg lgmx-44 gap-8 justify-center">
            <div class="lg:px-8 px-3 py-6">
                <form action="" method="POST">
                    <p class="text-4xl font-semibold">{{ $title }}</p>
                    <p class="text-zinc-600 mt-2">Be part of the Deverhub of family!</p>
                    <div class="mt-6 flex items-center gap-2">
                        <input type="text" name="first_name" placeholder="First Name..." class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                        
                        <input type="text" name="last_name" placeholder="Last Name..." class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                    </div>
                    <div class="flex items-center gap-2">
                        @error('first_name')
                            <p class="text-red-600 font-medium">{{ $message }}</p>
                        @enderror
                        @error('last_name')
                                <p class="text-red-600 font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input type="text" name="email" placeholder="Your email..." class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                        @error('email')
                            <p class="text-red-600 font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="pt-2">
                        <select name="gender" class="form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                            <option selected>Gender</option>
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                            <option value="2">Others</option>
                        </select>
                        @error('gender')
                            <p class="text-red-600 font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <input type="password" name="password" placeholder="Your password..." class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                        @error('password')
                            <p class="text-red-600 font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password..." class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="w-full py-2 bg-zinc-800 rounded-lg text-white font-medium text-3xl">Create account</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection