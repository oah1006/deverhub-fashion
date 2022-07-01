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
        
        <div class="bg-white w-full rounded-lg shadow-md mt-8">
            <div class="flex justify-end gap-4 border-b border-solid bg-blue-200 py-4 pr-4">
                <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}" class="text-xl font-medium hover:underline">Edit</a>
                <a href="{{ route('admin.users.destroy', ['id' => $user->id]) }}" class="text-xl font-medium hover:underline text-red-500">Remove</a>
            </div>
            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">ID</p>
                <p class="grow">{{ $user->id }}</p>
            </div>

            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Frist name</p>
                <p class="grow">{{ $user->first_name }}</p>
            </div>

            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Last name</p>
                <p class="grow">{{ $user->last_name }}</p>
            </div>
            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Email</p>
                <p class="grow">{{ $user->email }}</p>
            </div>
            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Gender</p>
                @if ($user->gender == 0)     
                    {!! '<p class="grow">Male</p>' !!}
                @elseif ($user->gender == 1)
                    {!! '<p class="grow">Female</p>' !!}
                @else
                    {!! '<p class="grow">Others</p>' !!}
                @endif
            </div>
            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Role</p>
                <p class="grow">{{ $user->role }}</p>
            </div>
            <div class="py-4 px-10 bg-blue-200 text-zinc-700 text-xl font-bold">
                <p>Time</p>
            </div>
            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Created_at</p>
                <p class="grow">{{ $user->created_at }}</p>
            </div>
            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Updated_at</p>
                <p class="grow">{{ $user->updated_at }}</p>
            </div>
        </div>
    </div>



@endsection