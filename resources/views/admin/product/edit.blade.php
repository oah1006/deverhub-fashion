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

        <form method="POST" action="{{ route('admin.products.update', ['id' => $product->id]) }}" class="bg-white w-full mt-10 px-10 py-6 rounded-lg shadow-md">
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
            <div class="mt-8 border-t border-solid border-zinc-300 pt-4">
                <p class="text-3xl font-medium">Product Variants</p>
            </div>
            <div class="mt-4 mb-3">
                <p>Color</p>
                <input type="text" name="color" placeholder="Color" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
            </div>
            <div class="mt-4 mb-3">
                <p>Size</p>
                <input type="text" name="size" placeholder="Size" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
            </div>
            <div class="mt-8">
                <button type="text" class="w-full py-2 bg-zinc-800 rounded-lg text-white font-medium text-3xl">Submit</button>
            </div>
            
            @csrf
            <div>
                <div class="w-full h-full z-10 fixed inset-0 bg-black/25 flex items-center">
                    
                    <div class="w-1/2 h-1/2 rounded-lg z-50 bg-white mx-auto px-6 py-3">
                        <p class="text-xl font-medium">Variants Product</p>
                        <div class="flex items-center border border-solid border-zinc-400 mt-3 px-2 py-2 gap-4">
                            <p class="px-1 py-1 bg-yellow-400 rounded-lg">Yellow</p>
                            <input type="text" class="tags-input form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4"  />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection