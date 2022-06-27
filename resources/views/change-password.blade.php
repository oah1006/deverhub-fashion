@extends('layouts.profile', ['footer' => true])

@section('title', $title)

@section('box')

    <p class="text-4xl text-bold">Change Password</>
    <p class="text-lg text-zinc-500">Here you can change your password </p>

    <form method="POST" class="mt-4">
        <div class="mt-3">
            <p>Your Password</p>
            <input class="w-full py-2 px-2 border border-solid border-zinc-300 rounded-lg mt-2" type="password" name="" placeholder="Password">
        </div>
        <div class="mt-3">
            <p>Change new Password</p>
            <input class="w-full py-2 px-2 border border-solid border-zinc-300 rounded-lg mt-2" type="password" name="" placeholder="Change New Password">
        </div>
        <div class="mt-3">
            <p>Confirm new Password</p>
            <input class="w-full py-2 px-2 border border-solid border-zinc-300 rounded-lg mt-2" type="password" name="" placeholder="Confirm New Password">
        </div>
        <button class="w-full py-3 bg-black text-center rounded-lg text-white mt-6 text-2xl font-medium">
            Save
        </button>
    </form>

@endsection