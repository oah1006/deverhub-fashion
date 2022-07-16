@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

<div class="bg-zinc-200 h-screen grow lg:px-10 lg:py-6">

    <h2 class="text-4xl text-zinc-500 font-light">{{ $title }}</h2>


    @if (session('msg'))
            <div class="bg-blue-200 text-blue-800 w-full px-4 py-3 rounded-lg my-3">{{ session('msg') }}</div>
    @endif

    

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
            <button type="submit" class="px-2 py-2 bg-emerald-300 rounded-md inline-block">Search now</button>
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
                            {{ $product->unit_price }}
                        </td>
                        <td class="px-6 py-3">
                            @if($product->stock == '0')
                                {!! '<p class="text-center font-medium w-22 py-0 bg-zinc-400 text-white rounded-md">Out of stock</p>' !!}
                            @else
                                {!! '<p class="text-center font-medium w-22 py-0 bg-emerald-300 rounded-md">Stocking</p>' !!}
                            @endif
                        </td>
                        <td class="lg:px-6 py-3 text-zinc-500 hover:underline flex gap-3">
                            <td class="lg:pl-6 py-3 text-zinc-500 hover:underline flex gap-3 ">
                                <a href="{{ route('admin.products.show', $product) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                                <a href="{{ route('admin.products.edit', $product) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <a onclick="return confirm('Are you sure you want to delete this user?')" href="{{ route('admin.products.destroy', $product) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a>
                            </td>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
        <div>
            <div class="w-full h-full z-10 fixed inset-0 bg-black/25 flex items-center">
                <div class="container-tags-input w-1/2 rounded-lg z-50 bg-white mx-auto px-6 py-3">
                    <p class="text-xl font-medium">Variants Product</p>
                    <div class="border border-solid border-zinc-400 mt-3 px-2 py-2 gap-4">
                        <div class="tags w-full flex flex-wrap">
                        </div>
                        <input type="text" class="tags-input form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4"  />
                    </div>
                </div>
            </div>
        </div>



@endsection