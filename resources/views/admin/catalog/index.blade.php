@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

    <div class="h-screen grow lg:px-10 lg:py-6">
        <p class="text-3xl">{{ $title }}</p>

        @if (session('msg'))
            <div class="bg-blue-200 text-blue-800 w-full px-4 py-3 rounded-lg my-3">{{ session('msg') }}</div>
        @endif

        <form action="" method="GET" class="mt-4 my-10 rounded-lg">
            <div class="flex items-center">
                <div class="group relative w-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 absolute left-3 top-2 text-slate-400 pointer-events-none group-focus-within:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="search" name="keywords" value="{{ request()->keywords }}" placeholder="Search" autocomplete="off" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none border border-zinc-300 w-full py-2 rounded-2xl pl-10 text-slate-900">
                </div>
                <a href="{{ route('admin.catalogs.create') }}" class="ml-auto hover:bg-blue-400 group flex items-center rounded-md bg-blue-500 text-white text-sm font-medium px-4 py-2 shadow-sm gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    New
                </a>
            </div>
        </form>


        <div class="relative overflow-x-auto shadow-md rounded-lg mt-10" x-data="{open : false}">
            <div class="flex pr-12 bg-white py-3">
                @if (request()->filled('parent_id'))
                    <div class="flex gap-3 grow">
                        @foreach($catalogOptions as $option)
                            @if (request()->input('parent_id') == $option->id)
                                <div class="text-sm flex items-center ml-2 py-0 px-2 bg-blue-50 rounded-lg gap-2 border text-slate-500 border-solid">
                                    <p class="text-slate-500 font-semibold underline">Catalog: </p>
                                    <p class="text-slate-500">{{$option->title}}</p>
                                </div>
                            @endif
                        @endforeach
                            <a href="{{ route('admin.catalogs.index') }}" class="mr-3 ml-auto text-white rounded-md hover:bg-blue-400 text-sm font-medium px-2 py-1 shadow-sm gap-3 bg-blue-500 hover:font-medium">Reset Search</a>
                    </div>
                @endif
                <div class="ml-auto">
                    <button class="flex items-center group" @click="open = ! open" x-cloak>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-zinc-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                        </svg>
                    </button>
                </div>
                <form method="GET" class="bg-white border border-1 border-solid w-96 px-4 py-3 rounded-lg justify-end ml-auto mt-2 absolute left-0 right-10 top-10 z-50" x-show="open"  x-transition.origin.top.left>
                    <div class="mt-3">
                        <p class="text-base font-medium text-zinc-600">Search for Catalogs</p>
                        <select name="parent_id" value="{{ request()->parent_id }}" class="border border-zinc-300 w-full py-2 rounded-2xl px-4 mt-1 focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none">
                            <option value="">Catalog</option>
                            @foreach($catalogOptions as $option)
                                <option value="{{ $option->id }}" {{ request()->parent_id == $option->id ? 'selected' : false }}>{{ $option->title  }}</option>
                            @endforeach
                        </select>
                    </div>  
                    <button type="submit" class="mt-3 rounded-md bg-blue-500 text-sm font-medium w-full px-4 py-2 text-white inline-block hover:bg-blue-400 group shadow-sm">Search</button>
                </form>
            </div>
            <table class="w-full text-left bg-white rounded-lg">
                <thead class="uppercase bg-slate-100 rounded-lg">
                    <tr class="text-xs text-zinc-600 font-bold">
                        <td class="lg:px-6 py-3">ID</td>
                        <td class="lg:px-6 py-3">TITLE</td>
                        <td class="lg:px-6 py-3">PARENT_ID</td>
                        <td class="text-right w-20 mr-10">
                        </td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($catalogs as $catalog)
                        <tr class="text-gray-600">
                            <td class="lg:px-6 py-3">
                                {{ $catalog->id }}
                            </td>
                            <td class="lg:px-6 py-3">
                                {{ $catalog->title }}
                            </td>
                            <td class="lg:px-6 py-3">
                                {{ optional($catalog->parent)->title }}
                            </td>
                            <td class="lg:pl-6 pr-12 py-3 text-zinc-500 hover:underline flex gap-3">
                                <a href="{{ route('admin.catalogs.show', $catalog) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                                <a href="{{ route('admin.catalogs.edit', $catalog) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <a onclick="return confirm('Are you sure you want to delete this catalog?')" class="grow" href="{{ route('admin.catalogs.destroy', $catalog) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="my-3">
            {{ $catalogs->links() }}
        </div>
    </div>

@endsection