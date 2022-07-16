@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

    <div class="bg-zinc-200 grow lg:px-10 lg:py-6">
        <div class="flex items-center">
            <p class="text-3xl">{{ $title }}</p>
            <a href="{{ route('admin.products.index') }}" class="px-3 py-2 bg-blue-800 rounded-lg text-white text-lg ml-auto">Back</a>
        </div>

        @if (session('msg'))
            <div class="bg-blue-200 text-blue-800 w-full px-4 py-3 rounded-lg my-3">{{ session('msg') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.products.update', $product) }}" class="bg-white w-full mt-10 px-10 py-6 rounded-lg shadow-md">
            <p class="text-3xl font-medium">{{ $title }}</p>
            <div class="mt-4 mb-3">
                <p>Title</p>
                <input type="text" name="title" value="{{ $product->title }}" placeholder="Title" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('title')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Sku</p>
                <input type="text" name="sku" value="{{ $product->sku }}" placeholder="Sku" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('sku')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Description</p>
                <textarea value="{{ $product->description }}" cols="80" rows="10" name="description" placeholder="Description" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Parent_id</p>
                <select name="catalog_id" class="form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    <option value="" selected>Catalog</option>
                    @foreach ($catalogOptions as $option)
                        <option value="{{ $option->id }}" @selected($option->id == $product->catalog_id)>{{ $option->title }}</option>
                    @endforeach
                </select>
                @error('catalog_id')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Stock</p>
                <input min="0" value="{{ $product->stock }}" type="number" name="stock" placeholder="Stock" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('stock')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Price</p>
                <input type="string" name="unit_price" value="{{ $product->unit_price }}" placeholder="Price" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('unit_price')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>   
            @csrf

            
        </form>

        
    </div>

@endsection