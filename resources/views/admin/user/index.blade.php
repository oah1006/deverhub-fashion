@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

    <div class="bg-zinc-200 h-screen grow lg:px-10 lg:py-6">
        <div class="flex items-center">
            <p class="text-3xl">{{ $title }}</p>
            <a href="{{ route('admin.users.create') }}" class="px-3 py-2 bg-blue-800 rounded-lg text-white text-lg ml-auto">Create a new</a>
        </div>

        @if (session('msg'))
            <div class="bg-blue-200 text-blue-800 w-full px-4 py-3 rounded-lg my-3">{{ session('msg') }}</div>
        @endif
        
        <form action="" method="GET" class="my-10 py-5 bg-white px-6 rounded-lg">
            <div class="flex gap-6">
                <div class="w-[33.333%]">
                    <p class="text-base font-medium text-zinc-700">Search for keywords</p>
                    <input type="search" name="keywords" value="{{ request()->keywords }}" placeholder="Search" class="border border-zinc-300 w-full py-2 rounded-2xl px-4 mt-2">
                </div>
                <div class="w-[33.333%]">
                    <p class="text-base font-medium text-zinc-700">Search for roles</p>
                    <select name="role" class="border border-zinc-300 w-full py-2 rounded-2xl px-4 mt-2">
                        <option value="">Role</option>
                        <option value="admin" {{ request()->role == 'admin' ? 'selected' : false }}>Admin</option>
                        <option value="customer" {{ request()->role == 'customer' ? 'selected' : false }}>User</option>
                    </select>
                </div>
                <div class="w-[33.333%]">
                    <p class="text-base font-medium text-zinc-700">Search for genders</p>
                    <select name="gender" value="{{ request()->gender }}" class="border border-zinc-300 w-full py-2 rounded-2xl px-4 mt-2">
                        <option value="">Gender</option>
                        <option value="0" {{ request()->gender === '0' ? 'selected' : false }}>Male</option>
                        <option value="1" {{ request()->gender === '1' ? 'selected' : false }}>Female</option>
                        <option value="2" {{ request()->gender === '2' ? 'selected' : false }}>Others</option>
                    </select>
                </div>
            </div>
            <div class="w-full flex items-center gap-3 my-4">
                <button type="submit" class="px-2 py-2 bg-blue-500 rounded-md text-white inline-block">Search now</button>
                <a href="{{ route('admin.users.index') }}" class="px-2 py-2 rounded-md bg-slate-200">Reset Search</a>
            </div>
        </form>

        <div class="relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-full text-sm text-left bg-white rounded-lg">
                <thead class="font-medium text-gray-800 uppercase bg-zinc-300 rounded-lg">
                    <tr>
                        <td class="lg:px-6 py-3">ID</td>
                        <td class="lg:px-6 py-3">FIRST NAME</td>
                        <td class="lg:px-6 py-3">LAST NAME</td>
                        <td class="lg:px-6 py-3">EMAIL</td>
                        <td class="lg:px-6 py-3">GENDER</td>
                        <td class="lg:px-6 py-3">ROLE</td>
                        <td></td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="lg:px-6 py-3">{{ $user->id }}</td>
                            <td class="lg:px-6 py-3">{{ $user->first_name }}</td>
                            <td class="lg:px-6 py-3">{{ $user->last_name }}</td>
                            <td class="lg:px-6 py-3">{{ $user->email }}</td>
                            <td class="lg:px-6 py-3">
                                @if ($user->gender === '0')
                                    {!! '<p>Male</p>' !!}
                                @elseif ($user->gender === '1')
                                    {!! '<p class="">Female</p>' !!}
                                @else
                                    {!! '<p class="">Others</p>' !!}
                                @endif
                            </td>
                            <td class="lg:px-6 py-3">
                                {!! $user->role == 'admin' ?
                                    '<p class="text-center font-medium py-0 bg-green-600 text-white rounded-lg">Admin</p>':
                                    '<p class="text-center font-medium py-0 bg-blue-600 text-white rounded-lg">User</p>'
                                !!}
                            </td>
                            <td class="lg:px-6 py-3 text-zinc-500 hover:underline flex gap-3">
                                <a href="{{ route('admin.users.show', ['id' => $user->id]) }}">
                                    <span class="material-icons-outlined">
                                        face
                                    </span>
                                </a>
                                <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}">
                                    <span class="material-icons-outlined">
                                        edit
                                    </span>
                                </a>
                                <a onclick="return confirm('Are you sure you want to delete this user?')" href="{{ route('admin.users.destroy', ['id' => $user->id]) }}">
                                    <span class="material-icons-outlined">
                                        delete
                                    </span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-3">
            {{ $users->links() }}
        </div>
    </div>

@endsection