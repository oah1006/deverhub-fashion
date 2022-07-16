@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

    <div class="grow lg:px-10 lg:py-6">
        <p class="text-4xl text-zinc-500 font-light">{{ $title }}</p>
        
        <form method="POST" class="bg-white w-full mt-5 rounded-lg shadow-md">
            <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                <p class="w-1/12">Title</p>
                <input type="text" name="title" placeholder="Title" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('title')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                <p class="w-1/12">Description</p>
                <textarea  cols="80" rows="10" name="description" placeholder="Description" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4"></textarea>
                @error('description')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                <p class="w-1/12">Parent_id</p>
                <select name="catalog_id" class="form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    <option value="" selected>Catalog_id</option>
                    @foreach($catalogOptions as $option)
                        <option value="{{ $option->id }}">{{ $option->title }}</option>
                    @endforeach
                </select>
                @error('catalog_id')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>

            <div class="rounded-lg bg-white px-10 py-3">
                <p class="text-xl font-medium">Variants Product</p>
                <div class="mt-5 flex items-center gap-4">
                    <p class="w-1/12">Color</p>
                    <input type="text" name="color" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4"/>
                </div>
                <div class="mt-4 flex items-center gap-4">
                    <p class="w-1/12">Size</p>
                    <input type="text" name="size" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4"/>
                </div>
                <div class="relative shadow-md rounded-lg mt-8">
                    <table class="w-full text-left bg-white rounded-lg">
                        <thead class="uppercase bg-slate-100 rounded-lg">
                            <tr class="text-xs text-zinc-600 font-bold">
                                <td class="lg:px-6 py-3">Color</td>
                                <td class="lg:px-6 py-3">Size</td>
                                <td class="lg:px-6 py-3">Qty</td>
                                <td class="lg:px-6 py-3">Price</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="text-gray-600">
                                <td class="lg:px-6 py-3">Red</td>
                                <td class="lg:px-6 py-3">S</td>
                                <td class="lg:px-6 py-3">
                                    <input type="text" name="size" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4"/>
                                </td>
                                <td class="lg:px-6 py-3"    > 
                                    <input type="text" name="size" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-0.5 px-4"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>                  
                </div>
            @csrf
        </form>

        
    </div>

    <div class="flex mt-4">
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.users.index') }}" class="font-medium text-lg inline-flex items-center rounded-md bg-white text-black px-4 py-2 shadow-lg hover:bg-zinc-50 gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                  </svg>
                List Users
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

@endsection