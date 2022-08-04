@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')


    <div class="grow lg:px-10 lg:py-6 min-h-screen">
        <div class="flex items-center">
            <p class="text-4xl text-zinc-500 font-light">{{ $title }}</p>
            <div class="flex gap-3 ml-auto">
                <a href="{{ route('admin.products.edit', $product) }}" class="text-xl bg-blue-500 text-white py-3 px-3 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </a>
                <form action="{{ route('admin.products.destroy', $product) }}" method="post"  class="flex items-center text-xl bg-white py-3 px-3 rounded-lg text-red-500">
                    <button onclick="return confirm('Are you sure you want to delete this product?')" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                    @method('delete')
                    @csrf
                </form>
            </div>
        </div>

        @if (session('msg'))
            <div class="bg-blue-200 text-blue-800 w-full px-4 py-3 rounded-lg my-3">{{ session('msg') }}</div>
        @endif

        
        <div class="bg-white w-full rounded-lg shadow-md mt-8">
            <p class="px-10 pt-4 text-cyan-700 text-medium text-lg">Thông tin sản phẩm</p>
            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">ID</p>
                <p class="grow">{{ $product->id }}</p>
            </div>

            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">Title</p>
                <p class="grow text-cyan-500 font-medium">{{ $product->title }}</p>
            </div>

            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">Description</p>
                <p class="grow">{{ $product->description }}</p>
            </div>
            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">Catalog</p>
                <p class="grow">{{ $product->catalog->title }}</p>
            </div>
        </div>
        <div class="bg-white w-full rounded-lg mt-8 py-4" x-data="{open : false}">
            <p class="px-10 text-cyan-700 text-medium text-lg">Thông số sản phẩm</p>
            <div class="flex py-4 border-b border-solid border-gray-100 px-10">
                <p class="w-1/3">Total stock</p>
                <p class="grow">{{ $sumStock }}</p>
            </div>
            <div class="flex py-4 px-10">
                <p class="w-1/3">Total price</p>
                <p class="grow">{{ $sumPrice }}</p>
            </div>
            <button type="button" id="auto-render" class="mx-10 flex items-center gap-2 py-1 px-2 hover:bg-teal-500 bg-teal-400 rounded-lg text-white font-medium text-lg" @click="open = ! open" x-cloak>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                </svg>
                Open detail parameters
            </button>
            <div class="relative shadow-md rounded-lg mt-8 px-10 py-6" x-show="open"  x-transition.origin.top.left>
                <table class="w-full text-left bg-white rounded-lg">
                    <thead class="uppercase bg-slate-100 rounded-lg">
                        <tr class="text-xs text-zinc-600 font-bold">
                            <td class="lg:px-6 py-3">Color</td>
                            <td class="lg:px-6 py-3">Size</td>
                            <td class="lg:px-6 py-3">Sku</td>
                            <td class="lg:px-6 py-3">Stock</td>
                            <td class="lg:px-6 py-3">Price</td>
                        </tr>
                    </thead>

                    <tbody id="item-product-variants">
                        @foreach($productVariant as $variant)
                            <tr>
                                <td class="lg:px-6 py-3">{{ $variant->color }}</td>
                                <td class="lg:px-6 py-3">{{ $variant->size }}</td>
                                <td class="lg:px-6 py-3">{{ $variant->sku }}</td>
                                <td class="lg:px-6 py-3">{{ $variant->stock }}</td>
                                <td class="lg:px-6 py-3">{{ $variant->unit_price}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>                  
            </div>
        </div>
        <a href="{{ route('admin.products.index') }}" class="font-medium text-lg inline-flex mt-3 items-center rounded-md bg-white text-black px-4 py-2 shadow-lg hover:bg-zinc-50 gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
              </svg>
            List Users
        </a>
    </div>



@endsection