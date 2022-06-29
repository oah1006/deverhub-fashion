@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

    <div class="bg-zinc-200 h-screen grow lg:px-10 lg:py-6">
        <div class="flex items-center">
            <p class="text-3xl">{{ $title }}</p>
            <a href="{{ route('admin.catalogs.create') }}" class="px-3 py-2 bg-blue-800 rounded-lg text-white text-lg ml-auto">Create a new</a>
        </div>

        <div class="relative overflow-x-auto shadow-md rounded-lg mt-10">
            <table class="w-full text-sm text-left bg-white rounded-lg">
                <thead class="font-medium text-gray-800 uppercase bg-zinc-300 rounded-lg">
                    <tr>
                        <td class="lg:px-6 py-3">ID</td>
                        <td class="lg:px-6 py-3">TITLE</td>
                        <td class="lg:px-6 py-3">PARENT_ID</td>
                        <td class="lg:px-6 py-3">
                            <form  method="POST"> 
                                @method('delete')
                                <button onclick="return confirm('Are you sure you want to delete this user?')" href="" class="text-red-600 font-bold hover:underline">Delete all</button>
                                @csrf
                            </form>
                        </td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($catalogs as $catalog)
                        <tr>
                            <td class="lg:px-6 py-3">
                                {{ $catalog->id }}
                            </td>
                            <td class="lg:px-6 py-3">
                                {{ $catalog->title }}
                            </td>
                            <td class="lg:px-6 py-3">
                                {{ optional($catalog->parent)->title }}
                            </td>
                            <td class="lg:px-6 py-3 text-zinc-500 hover:underline">
                                <a>edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection