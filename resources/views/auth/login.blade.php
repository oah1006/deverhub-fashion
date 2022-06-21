@extends('layouts.master', ['footer' => true])

@section('title', $title)

@section('content')
    <div class="w-full bg-zinc-100 h-screen pt-10">
        <div class="flex bg-white rounded-lg mx-20 gap-8">
            <div class="w-1/2 px-8 py-6">
                <div>
                    <p class="text-4xl font-semibold">{{ $title }}</p>
                    <p class="text-zinc-600 mt-2">Please login with your email and password!</p>
                    <div class="mt-6">
                        <p class="text-2xl font-medium">Email Address</p>
                        <input type="email" name="email" placeholder="Your email..." class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                    </div>
                    <div class="mt-3">
                        <p class="text-2xl font-medium">Password</p>
                        <input type="password" name="password" placeholder="Your password..." class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                    </div>
                    <div class="mt-3 flex items-center gap-3">
                        <input type="checkbox" name="remember" id="remember">
                        <p>Do you want the remember account?</p>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="w-full py-2 bg-zinc-800 rounded-lg text-white font-medium text-3xl">Login</button>
                    </div>
                </div>
            </div>
            <div class="w-1/2 bg-black px-8 py-6">
                <p class="text-4xl font-semibold text-white">Create an account right here!</p>
                <p class="text-white mt-3">You can get special services just for you like checking your purchase history and getting member coupons. Sign up for free today!</p>
                <div class="mt-6">
                    <button type="submit" class="px-8 py-2 rounded-lg font-medium text-3xl bg-white">Register</button>
                </div>
            </div>
        </div>
    </div>
@endsection