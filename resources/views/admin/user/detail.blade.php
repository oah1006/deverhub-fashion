@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')


    <div class="grow lg:px-10 lg:py-6">
        <div class="flex items-center">
            <p class="text-4xl text-zinc-500 font-light">{{ $title }}</p>
            <div class="flex gap-3 ml-auto">
                <a href="{{ route('admin.users.edit', $user) }}" class="text-xl bg-blue-500 text-white py-3 px-3 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </a>
                <a href="{{ route('admin.users.destroy', $user) }}" class="text-xl bg-white py-3 px-3 rounded-lg text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </a>
            </div>
        </div>

        

        @if (session('msg'))
            <div class="bg-blue-200 text-blue-800 w-full px-4 py-3 rounded-lg my-3">{{ session('msg') }}</div>
        @endif
        
        <div class="bg-white w-full rounded-lg shadow-md mt-8">
            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">ID</p>
                <p class="grow">{{ $user->id }}</p>
            </div>

            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">Frist name</p>
                <p class="grow text-cyan-500 font-medium">{{ $user->first_name }}</p>
            </div>

            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">Last name</p>
                <p class="grow text-cyan-500 font-medium">{{ $user->last_name }}</p>
            </div>
            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">Email</p>
                <p class="grow text-cyan-500 font-medium">{{ $user->email }}</p>
            </div>
            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">Gender</p>
                @if ($user->gender == 0)     
                    {!! '<p class="grow">Male</p>' !!}
                @elseif ($user->gender == 1)
                    {!! '<p class="grow">Female</p>' !!}
                @else
                    {!! '<p class="grow">Others</p>' !!}
                @endif
            </div>
            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">Role</p>
                <p class="grow">{{ $user->role }}</p>
            </div>
            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">Created_at</p>
                <p class="grow">{{ $user->created_at }}</p>
            </div>
            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">Updated_at</p>
                <p class="grow">{{ $user->updated_at }}</p>
            </div>
        </div>
        <a href="{{ route('admin.users.index') }}" class="font-medium text-lg inline-flex mt-3 items-center rounded-md bg-white text-black px-4 py-2 shadow-lg hover:bg-zinc-50 gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
              </svg>
            List Users
        </a>
    </div>

    



@endsection