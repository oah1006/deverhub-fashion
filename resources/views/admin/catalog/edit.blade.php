@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

    <div class="bg-zinc-200 grow lg:px-10 lg:py-6">
        <div class="flex items-center">
            <p class="text-3xl">{{ $title }}</p>
            <a href="{{ route('admin.catalogs.index') }}" class="px-3 py-2 bg-blue-800 rounded-lg text-white text-lg ml-auto">Back</a>
        </div>

        @if (session('msg'))
            <div class="bg-blue-200 text-blue-800 w-full px-4 py-3 rounded-lg my-3">{{ session('msg') }}</div>
        @endif
        <form method="POST" action="{{ route('admin.catalogs.update', ['id' => $catalog->id]) }}" class="bg-white w-full mt-10 px-10 py-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <p class="text-3xl font-medium">{{$title}}</p>
                <a onclick="return confirm('Are you sure you want to delete this user?')" href="{{ route('admin.catalogs.destroy', ['id' => $catalog->id]) }}" class="bg-red-600 text-white font-medium rounded-lg py-1 px-4 ml-auto text-center">Delete</a>
            </div>
            <div class="mt-4 mb-3">
                <p>Title</p>
                <input type="text" value="{{ $catalog->title }}"  name="title" placeholder="Title" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('title')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 mb-3">
                <p>Parent_id</p>
                <select name="parent_id" class="form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    <option value="" selected>Parent_id</option>
                    @foreach ($catalogOptions as $option)
                        <option value="{{ $option->id }}"  @selected($option->id)>{{ $option->id }}</option>
                    @endforeach
                </select>
                @error('parent_id')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-8">
                <button type="submit" class="w-full py-2 bg-zinc-800 rounded-lg text-white font-medium text-3xl">Submit</button>
            </div>
            @csrf
        </form>
    </div>

@endsection