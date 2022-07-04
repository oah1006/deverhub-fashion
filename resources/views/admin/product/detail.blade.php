@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')


    <div class="bg-zinc-200 grow lg:px-10 lg:py-6">
        <div class="flex items-center">
            <p class="text-3xl">{{ $title }}</p>
            <a href="{{ route('admin.products.index') }}" class="px-3 py-2 bg-blue-800 rounded-lg text-white text-lg ml-auto">Back</a>
        </div>
        
        <div class="bg-white w-full rounded-lg shadow-md mt-8">
            <div class="flex gap-4 border-b border-solid bg-blue-200 py-4 px-10">
                <p class="text-zinc-700 text-xl font-bold">Information product</p>
                <div class="flex gap-4 ml-auto">
                    <a href="" class="text-xl font-medium hover:underline">Edit</a>
                    <a href="" class="text-xl font-medium hover:underline text-red-500">Remove</a>
                </div>
            </div>
            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">ID</p>
                <p class="grow">{{ $product->id }}</p>
            </div>

            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Title</p>
                <p class="grow">{{ $product->title }}</p>
            </div>

            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Description</p>
                <p class="grow">{{ $product->description }}</p>
            </div>
            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Catalog</p>
                <p class="grow">{{ $product->catalog->title }}</p>
            </div>
            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Stock</p>
                <p class="grow">{{ $product->stock }}</p>
            </div>
            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Price</p>
                <p class="grow">{{ $product->unit_price }}</p>
            </div>
            <div class="py-4 px-10 bg-blue-200 text-zinc-700 text-xl font-bold">
                <p>Time</p>
            </div>
            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Created_at</p>
                <p class="grow">{{$product->created_at}}</p>
            </div>
            <div class="flex text-xl py-8 border-b border-solid border-zinc-300 px-10">
                <p class="w-1/3">Updated_at</p>
                <p class="grow">{{ $product->updated_at }}</p>
            </div>
        </div>
    </div>



@endsection