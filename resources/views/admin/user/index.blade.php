@extends('admin.layouts.guest')

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

        <div class="relative overflow-x-auto shadow-md rounded-lg mt-10">
            <table class="w-full text-sm text-left bg-white rounded-lg">
                <thead class="font-medium text-gray-800 uppercase bg-zinc-300 rounded-lg">
                    <tr>
                        <td class="lg:px-6 py-3">ID</td>
                        <td class="lg:px-6 py-3">FIRST NAME</td>
                        <td class="lg:px-6 py-3">LAST NAME</td>
                        <td class="lg:px-6 py-3">EMAIL</td>
                        <td class="lg:px-6 py-3">GENDER</td>
                        <td class="lg:px-6 py-3">ROLE</td>
                        <td class="lg:px-6 py-3">
                            <form action="{{ route('admin.users.destroy-all') }}" method="POST"> 
                                @method('delete')
                                <button onclick="return confirm('Are you sure you want to delete this user?')" href="{{ route('admin.users.destroy-all') }}" class="text-red-600 font-bold hover:underline">Delete all</button>
                                @csrf
                            </form>
                        </td>
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
                                @if ($user->gender == 0)
                                    {!! '<p>Male</p>' !!}
                                @elseif ($user->gender == 1)
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
                            <td class="lg:px-6 py-3 text-zinc-500 hover:underline">
                                <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}">edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection