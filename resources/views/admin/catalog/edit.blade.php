@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

    <div class="grow lg:px-10 lg:py-6">

        <p class="text-4xl text-zinc-500 font-light">{{ $title }}</p>


        @if (session('msg'))
            <div class="bg-blue-200 text-blue-800 w-full px-4 py-3 rounded-lg my-3">{{ session('msg') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.catalogs.update', $catalog) }}">
            <div class="bg-white w-full mt-5 rounded-lg shadow-md">
                <div class="flex items-center gap-4 border-b boder-gray-100 border-solid py-6">
                    <p class="w-1/12">Title</p>
                    <input type="text" value="{{ $catalog->title }}"  name="title" placeholder="Title" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    @error('title')
                        <span class="text-red-500 font-medium">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                    <p class="w-1/12">Parent_id</p>
                    <select name="parent_id" class="form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                        <option value="">Parent_id</option>
                        @foreach ($catalogOptions as $option)
                            <option value="{{ $option->id }}" @selected($option->id == $catalog->parent_id)>{{ $option->title }}</option>
                        @endforeach
                    </select>
                    @error('parent_id')
                        <span class="text-red-500 font-medium">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex mt-4">
                <div class="flex items-center gap-3">
                    <a href="{{ route('admin.catalogs.index') }}" class="font-medium text-lg inline-flex items-center rounded-md bg-white text-black px-4 py-2 shadow-lg hover:bg-zinc-50 gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                          </svg>
                        List Catalogs
                    </a>
                    <a href="{{ route('admin.catalogs.show', $catalog) }}" class="inline-flex items-center gap-3 px-3 py-2 rounded-lg text-black font-medium text-lg ml-auto">
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