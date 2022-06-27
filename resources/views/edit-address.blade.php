@extends('layouts.profile', ['footer' => true])

@section('title', $title)

@section('box')

    <div class="flex items-center">
        <p class="text-4xl text-bold">Change delivery address</p>
        <a href="{{ url()->previous() }}" class="rounded-lg bg-blue-900 text-white ml-auto py-2 px-4">Back</a>
    </div>

    <form method="POST" class="mt-4">
        <div class="mt-3">
            <p>Address</p>
            <input class="w-full py-2 px-2 border border-solid border-zinc-300 rounded-lg mt-2" type="text" name="address" placeholder="Address">
        </div>
        <div class="mt-3">
            <p>Phone number</p>
            <input class="w-full py-2 px-2 border border-solid border-zinc-300 rounded-lg mt-2" type="phone_number" name="" placeholder="Phone number">
        </div>
        <button class="w-full py-3 bg-black text-center rounded-lg text-white mt-6 text-2xl font-medium">
            Save
        </button>
    </form>

@endsection