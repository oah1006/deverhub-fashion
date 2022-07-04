@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

    <div class="bg-zinc-200 grow lg:px-10 lg:py-6">
        <div class="flex items-center">
            <p class="text-3xl">{{ $title }}</p>
            <a href="{{ route('admin.products.index') }}" class="px-3 py-2 bg-blue-800 rounded-lg text-white text-lg ml-auto">Back</a>
        </div>

        <form method="POST" class="bg-white w-full mt-10 px-10 py-6 rounded-lg shadow-md">
            <p class="text-3xl font-medium">{{ $title }}</p>
            <div class="mt-4 mb-3">
                <p>Title</p>
                <input type="text" name="title" placeholder="Title" value="{{  }}" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('title')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Sku</p>
                <input type="text" name="sku" placeholder="Sku" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('sku')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Description</p>
                <textarea  cols="80" rows="10" name="description" placeholder="Description" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4"></textarea>
                @error('description')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Parent_id</p>
                <select name="catalog_id" class="form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    <option value="" selected>Catalog_id</option>
                    @foreach($catalogOptions as $option) 
                        <option value="{{ $option->id }}">$option->title</option>
                    @endforeach
                </select>
                @error('catalog_id')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Stock</p>
                <input min="0" type="number" name="stock" placeholder="Stock" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('stock')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Price</p>
                <input type="string" name="unit_price" placeholder="Price" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('unit_price')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-8">
                <button type="text" class="w-full py-2 bg-zinc-800 rounded-lg text-white font-medium text-3xl">Submit</button>
            </div>
            @csrf
        </form>
    </div>

@endsection