@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

<div class="bg-zinc-200 h-screen grow lg:px-10 lg:py-6">
    <div class="flex items-center">
        <p class="text-3xl">{{ $title }}</p>
        <a href="" class="px-3 py-2 bg-blue-800 rounded-lg text-white text-lg ml-auto">Create a new</a>
    </div>

    <form action="" method="GET" class="my-10 py-5 bg-white px-6 rounded-lg">
        <div class="flex gap-6">
            <div class="w-1/2">
                <p class="text-base font-medium text-zinc-700">Search for keywords</p>
                <input type="search" name="keywords" value="{{ request()->keywords }}" placeholder="Search" class="border border-zinc-300 w-full py-2 rounded-2xl px-4 mt-2">
            </div>
            <div class="w-1/2">
                <p class="text-base font-medium text-zinc-700">Search for parent catalog</p>
                <select name="parent_id" class="border border-zinc-300 w-full py-2 rounded-2xl px-4 mt-2">
                    <option value="">Parent Catalog</option>
                        <option></option>
                </select>
            </div>
        </div>
        <div class="w-full flex items-center gap-3 my-4">
            <button type="submit" class="px-2 py-2 bg-blue-500 rounded-md text-white inline-block">Search now</button>
            <a class="px-2 py-2 rounded-md bg-slate-200">Reset Search</a>
        </div>
    </form>

    <div class="relative overflow-x-auto shadow-md rounded-lg mt-10">
        <table class="w-full text-sm text-left bg-white rounded-lg">
            <thead class="font-medium text-gray-800 uppercase bg-zinc-300 rounded-lg">
                <tr>
                    <td class="lg:px-6 py-3">ID</td>
                    <td class="lg:px-6 py-3">TITLE</td>
                    <td class="lg:px-6 py-3">Catalog</td>
                    <td class="lg:px-6 py-3">Price</td>
                    <td class="lg:px-6 py-3">Stock</td>
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
                @foreach($products as $product)

                    <tr>
                        <td class="lg:px-6 py-3">
                            {{ $product->id }}
                        </td>
                        <td class="lg:px-6 py-3">
                            {{ $product->title }}
                        </td>
                        <td class="lg:px-6 py-3">
                            {{ $product->catalog->title }}
                        </td>
                        <td class="lg:px-6 py-3">
                        </td>
                        <td class="lg:px-6 py-3 text-zinc-500 hover:underline flex gap-3">
                            <a href="">
                                <span class="material-icons-outlined">
                                    face
                                </span>
                            </a>
                            <a href="">
                                <span class="material-icons-outlined">
                                    edit
                                </span>
                            </a>
                            <a onclick="return confirm('Are you sure you want to delete this user?')" href="">
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


@endsection