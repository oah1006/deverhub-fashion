@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

    <div class="w-full grow lg:px-10 lg:py-6">
        <p class="text-4xl text-zinc-500 font-light">{{ $title }}</p>

        @if (session('msg'))
            <div class="bg-blue-200 text-blue-800 w-full px-4 py-3 rounded-lg my-3">{{ session('msg') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.products.update', $product) }}">
            <div class="bg-white w-full mt-5 rounded-lg shadow-md">
                <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                    <p class="w-1/12"></p>
                    <input type="text" name="" value="" placeholder="" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    @error('')
                        <span class="text-red-500 font-medium">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                    <p class="w-1/12">Description</p>
                    <textarea value="" cols="80" rows="10" name="" placeholder="" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">{{ old('description', $product->description) }}</textarea>
                    @error('')
                        <span class="text-red-500 font-medium">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                    <p class="w-1/12"></p>
                    <textarea value="" cols="80" rows="10" name="" placeholder="" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">{{ old('description', $product->description) }}</textarea>
                    @error('')
                        <span class="text-red-500 font-medium">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                    <p class="w-1/12">Parent_id</p>
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
                
                <p class="text-xl font-medium px-10 pt-6">Variants Product</p>
                <div class="mt-5 flex items-center gap-4 px-10 py-6">
                    <p class="w-1/12">Color</p>
                    <input type="text" id="color-item" placeholder="Color" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4"/>
                </div>
                <div class="mt-4 flex items-center gap-4 px-10 pb-6">
                    <p class="w-1/12">Size</p>
                    <input type="text" id="size-item" placeholder="Size" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4"/>
                </div>
                <button type="button" id="add-item" class="mx-10 flex items-center gap-2 py-1 px-2 hover:bg-teal-500 bg-teal-400 rounded-lg rounded-lg text-white font-medium text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Add
                </button>
    
                <div class="relative shadow-md rounded-lg mt-8 px-10 py-6">
                    <table class="w-full text-left bg-white rounded-lg">
                        <thead class="uppercase bg-slate-100 rounded-lg">
                            <tr class="text-xs text-zinc-600 font-bold">
                                <td class="lg:px-6 py-3">Color</td>
                                <td class="lg:px-6 py-3">Size</td>
                                <td class="lg:px-6 py-3">Sku</td>
                                <td class="lg:px-6 py-3">Qty</td>
                                <td class="lg:px-6 py-3">Price</td>
                                <td class="lg:px-6 py-3"></td>
                            </tr>
                        </thead>
    
                        <tbody id="item-product-variants">
                            @foreach($productVariant as $key => $variant)
                                <tr class="variant text-zinc-800">
                                    <td class="lg:px-6 py-3">
                                        <input type="text" value="{{ $variant->color }}" name="variants[{{ $key }}][color]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4" />
                                    </td>
                                    <td class="lg:px-6 py-3">
                                        <input type="text" value="{{ $variant->size }}" name="variants[{{ $key }}][size]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4" />    
                                    </td>
                                    <td class="lg:px-6 py-3">
                                        <input type="text" value="{{ $variant->sku }}" name="variants[{{ $key }}][sku]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4" />    
                                    </td>
                                    <td class="lg:px-6 py-3">
                                        <input type="number" value="{{ $variant->stock }}" name="variants[{{ $key }}][stock]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4" />    
                                    </td>
                                    <td class="lg:px-6 py-3">
                                        <input type="number" value="{{ $variant->unit_price }}" name="variants[{{ $key }}][unit_price]" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4" />        
                                    </td>
                                    <td class="lg:pl-6 py-3">
                                        <a class="remove-variant" onclick="return confirm('Are you sure you want to delete this variant?')" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </td>   
                                    <input id="product-variant-id" type="hidden" value="{{ $variant->product_id }}"" name="variants[{{ $key }}][product_id]" />
                                </tr>
                            @endforeach
                            <input type="hidden" id="valueVariant" value="{{ $product->id }}" />
                        </tbody>
                    </table>                  
                </div>
            </div>
            <div class="flex mt-4">
                <div class="flex items-center gap-3">
                    <a href="{{ route('admin.products.index') }}" class="font-medium text-lg inline-flex items-center rounded-md bg-white text-black px-4 py-2 shadow-lg hover:bg-zinc-50 gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                          </svg>
                        List Users
                    </a>
                    <a href="{{ route('admin.products.show', $product) }}" class="inline-flex items-center gap-3 px-3 py-2 rounded-lg text-black font-medium text-lg ml-auto">
                        <span class="material-icons-outlined">
                            reply
                        </span>
                        Back
                    </a>
                </div>
                <div class="ml-auto">
                    <button type="submit" class="flex items-center gap-2 py-2 px-4 hover:bg-blue-400 bg-blue-500 rounded-lg text-white font-medium text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        Submit
                    </button>
                </div>
            </div>
            @method('PUT')
            @csrf 
        </form>    
    </div>

@endsection