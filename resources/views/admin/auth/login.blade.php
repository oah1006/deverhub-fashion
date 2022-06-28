@extends('admin.layouts.guest')

@section('content')

    <div class="min-h-screen w-full bg-zinc-200 flex items-center">
        <div class="bg-white w-96 h-96 rounded-lg shadow-lg mx-auto px-10 py-6">
            <p class="text-4xl font-medium">Login</p>
            @if (session('msg'))
                <p class="text-red-600 font-medium">{{ session('msg') }}</p>  
            @endif
            <form action="" method="POST">
                <div class="mt-3">
                    <p class="text-lg">Email Address</p>
                    <input type="text" name="email" placeholder="Your email..." class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                    @error('email')
                    <p class="text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <p class="text-lg">Email Address</p>
                    <input type="password" name="password" placeholder="Your password..." class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                    @error('password')
                    <p class="text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3 flex items-center gap-3">
                    <input type="checkbox" name="remember" id="remember">
                    <p>Do you want the remember account?</p>
                </div>
                <div class="mt-6">
                    <button type="submit" class="w-full py-2 bg-zinc-800 rounded-lg text-white font-medium text-3xl">Login</button>
                </div>
                @csrf
            </form>
        </div>
    </div>

@endsection
