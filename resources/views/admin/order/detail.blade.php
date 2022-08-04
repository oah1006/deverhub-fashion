@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)



@section('content')

<div class="grow lg:px-10 lg:py-6">
    <div class="flex items-center">
        <p class="text-4xl text-zinc-500 font-light">{{ $title }}</p>
        <div class="flex gap-3 ml-auto">
            <a href="{{ route('admin.orders.edit', $order) }}" class="text-xl bg-blue-500 text-white py-3 px-3 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
            </a>
            {{-- <form action="{{ route('admin.orders.destroy', $order) }}" method="post"  class="flex items-center text-xl bg-white py-3 px-3 rounded-lg text-red-500">
                <button onclick="return confirm('Are you sure you want to delete this product?')" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
                @method('delete')
                @csrf
            </form> --}}
        </div>
    </div>

    

    @if (session('msg'))
        <div class="bg-blue-200 text-blue-800 w-full px-4 py-3 rounded-lg my-3">{{ session('msg') }}</div>
    @endif
    
    <div class="bg-white w-full rounded-lg shadow-md mt-8">
        <p class="px-10 py-4 text-rose-400 text-lg">PRODUCT</p>
        <div class="flex pb-4 border-b border-solid border-gray-100 px-10">
            <p class="w-1/3">code</p>
            <p class="grow text-red-500 underline">{{ $order->code }}</p>
        </div>

        <div class="flex py-4 border-b border-solid border-gray-100 px-10">
            <p class="w-1/3">status</p>
            <p class="grow text-red-500 font-medium">{{ $order->status }}</p>
        </div>
    </div>

    <div class="bg-white w-full rounded-lg shadow-md mt-8">
        <p class="px-10 py-4 text-rose-400 text-lg">PAYMENT SUMARY</p>
        <div class="flex pb-4 border-b border-solid border-gray-100 px-10">
            <p class="w-1/3">sub total</p>
            <p class="grow font-medium">{{ $order->sub_total }}</p>
        </div>
        <div class="flex py-4 border-b border-solid border-gray-100 px-10">
            <p class="w-1/3">shipping fee</p>
            <p class="grow font-medium">{{ $order->shipping_fee }}</p>
        </div>
        <div class="flex py-4 px-10">
            <p class="w-1/3">Total</p>
            <p class="grow">{{ $order->total }}</p>
        </div>
    </div>

    <div class="bg-white w-full rounded-lg shadow-md mt-8">
        <p class="px-10 py-4 text-rose-400 text-lg">INFORMATION CUSTOMER</p>
        <div class="flex pb-4 border-b border-solid border-gray-100 px-10">
            <p class="w-1/3">First name</p>
            <p class="grow">{{ $order->first_name }} </p>
        </div>

        <div class="flex py-4 border-b border-solid border-gray-100 px-10">
            <p class="w-1/3">Last name</p>
            <p class="grow">{{ $order->last_name }}</p>
        </div>

        <div class="flex py-4 border-b border-solid border-gray-100 px-10">
            <p class="w-1/3">Role</p>
            <p class="grow text-cyan-500 font-medium">{{ $order->user->role }}</p>
        </div>

        <div class="flex py-4 border-b border-solid border-gray-100 px-10">
            <p class="w-1/3">Email</p>
            <p class="grow">{{ $order->email }}</p>
        </div>

        <div class="flex py-4 border-b border-solid border-gray-100 px-10">
            <p class="w-1/3">Gender</p>
            <p class="grow">{{ $order->gender }}</p>
        </div>

        <div class="flex py-4 border-b border-solid border-gray-100 px-10">
            <p class="w-1/3">Address</p>
            <p class="grow">{{ $order->address }}</p>
        </div>

        <div class="flex py-4 border-b border-solid border-gray-100 px-10">
            <p class="w-1/3">Phone number</p>
            <p class="grow">{{ $order->phone_number }}</p>
        </div>

        <div class="flex py-4 border-b border-solid border-gray-100 px-10">
            <p class="w-1/3">payment method</p>
            <p class="grow">{{ $order->payment_method }}</p>
        </div>
    </div>
    <a href="{{ route('admin.orders.index') }}" class="font-medium text-lg inline-flex mt-3 items-center rounded-md bg-white text-black px-4 py-2 shadow-lg hover:bg-zinc-50 gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
          </svg>
        List Users
    </a>
</div>




@endsection