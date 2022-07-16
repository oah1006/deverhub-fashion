@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

    <div class="bg-zinc-200 grow lg:px-10 lg:py-6">
        <div class="flex items-center">
            <p class="text-3xl">{{ $title }}</p>
            <a href="{{ route('admin.products.index') }}" class="px-6 py-1 bg-emerald-300 rounded-lg ml-auto">Back</a>
        </div>

        <form method="POST">
            <div class="bg-white w-full mt-10 px-10 py-6 rounded-lg shadow-md">
                <p class="text-3xl font-medium">Information Product</p>
                <div class="mt-4 mb-3">
                    <p>Title</p>
                    <input type="text" name="title" placeholder="Title" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    @error('title')
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
                            <option value="{{ $option->id }}">{{ $option->title }}</option>
                        @endforeach
                    </select>
                    @error('catalog_id')
                        <span class="text-red-500 font-medium">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            @csrf
        </form>
    </div>

@endsection