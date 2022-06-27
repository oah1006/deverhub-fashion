@extends('layouts.profile', ['footer' => true])

@section('title', $title)

@section('box')

    <div class="flex items-center gap-3 mb-8">
        <p class="lg:text-4xl text-3xl text-bold">Delivery Address</p>
        <a href="{{ route('profile.edit-address') }}" class="lg:py-2 py-1 text-center lg:px-4 px-1 inline-block rounded-lg bg-blue-900 text-white ml-auto">New address</a>
    </div>

    @for($i = 0; $i < 4; $i++) 
        <div class="border-t border-solid border-zinc-300 flex lg:flex-row flex-col items-center py-4">
            <div>
                <button class="border border-red-400 border-solid inline-block px-2 py-0 rounded-lg">Default</button>
                <p class="font-medium mt-3">78/17A đường Hồ Bá Phấn, phường Phước Long A, quận 9, TPHCM</p>
                <p class="text-zinc-500">0931395361</p>
            </div>
            <div class="flex gap-4 ml-auto">
                <a href="#" class="underline">Edit</a>
                <a href="#" class="underline">Remove</a>
            </div>
        </div>
    @endfor
@endsection