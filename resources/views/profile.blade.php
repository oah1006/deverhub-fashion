@extends('layouts.profile', ['footer' => true])

@section('title', $title)

@section('box')
    <p class="text-4xl text-bold">Profile</>
    <p class="text-lg text-zinc-500">There is your profile includes your informations: name, email, vv.</p>

    <form method="POST" class="mt-4">
        <div class="flex w-full gap-4">
            <div class="w-1/2">
                <p>First Name:</p>
                <input class="w-full py-2 px-2 border border-solid border-zinc-300 rounded-lg mt-2" type="text" name="first_name" placeholder="First Name">
            </div>
            <div class="w-1/2">
                <p>Last Name:</p>
                <input class="w-full py-2 px-2 border border-solid border-zinc-300 rounded-lg mt-2" type="text" name="last_name" placeholder="Last Name">
            </div>
        </div>
        <div class="mt-3">
            <p>Email</p>
            <input class="w-full py-2 px-2 border border-solid border-zinc-300 rounded-lg mt-2" type="text" name="email" placeholder="Email">
        </div>
        <div class="mt-3">
            <p>Gender</p>
            <select name="gender" class="form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded-lg py-2 px-2 mt-2">
                <option selected>Gender</option>
                <option value="0">Male</option>
                <option value="1">Female</option>
                <option value="2">Others</option>
            </select>
        </div>
        <button class="w-full py-3 bg-black text-center rounded-lg text-white mt-6 text-2xl font-medium">
            Save
        </button>
    </form>
@endsection