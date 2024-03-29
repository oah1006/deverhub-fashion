@extends('admin.layouts.guest', ['sidebar' => true])

@section('title', $title)


@section('content')

<div class="grow lg:px-10 lg:py-6">
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    <p class="text-4xl text-zinc-500 font-light">{{ $title }}</p>

    <form method="POST" action="{{ route('admin.orders.update', $order) }}">
        <div class="bg-white w-full mt-5 rounded-lg shadow-md">
            <p class="px-10 py-4 text-rose-400 text-lg">PRODUCT</p>
            <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                <p class="w-1/12">Code</p>
                <input type="text" name="code" value="{{ old('code') ?? $order->code }}" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('code')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div> 

            <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                <p class="w-1/12">Status</p>
                <select name="status" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    <option value="pending" @selected($order->status == 'pending')>Pending</option>
                    <option value="delivering" @selected($order->status == 'delivering')>Delivering</option> 
                    <option value="succeed" @selected($order->status == 'succeed')>Succeed</option>
                    <option value="cancelled" @selected($order->status == 'cancelled')>Cancelled</option>
                </select>
                @error('status')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="bg-white w-full mt-5 rounded-lg shadow-md">
            <p class="px-10 py-4 text-rose-400 text-lg">PAYMENT SUMARY</p>

            <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                <p class="w-1/12">Shipping fee</p>
                <input type="text" name="shipping_fee" value="{{ old('shipping_fee') ?? $order->shipping_fee }}" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('shipping_fee')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div> 
        </div>
        
        <div class="bg-white w-full mt-5 rounded-lg shadow-md">
            <p class="px-10 py-4 text-rose-400 text-lg">INFORMATION CUSTOMER</p>
            <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                <p class="w-1/12">First name</p>
                <input type="text" name="first_name" value="{{ old('first_name') ?? $order->first_name }}" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('first_name')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div> 

            <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                <p class="w-1/12">Last name</p>
                <input type="text" name="last_name" value="{{ old('last_name') ?? $order->last_name }}" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('last_name')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div> 

            <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                <p class="w-1/12">Email</p>
                <input type="text" name="email" value="{{ old('email') ?? $order->email }}" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('email')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div> 

            <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                <p class="w-1/12">Gender</p>
                <select name="gender" class="form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                    <option selected>Gender</option>
                    <option value="male" @selected($order->gender == 'male')>Male</option>
                    <option value="female" @selected($order->gender == 'female')>Female</option>
                    <option value="other" @selected($order->gender == 'other')>Others</option>
                </select>
            </div> 

            <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                <p class="w-1/12">Address</p>
                <input type="text" name="address" value="{{ old('address') ?? $order->address }}" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('address')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div> 

            <div class="flex items-center gap-4 border-b boder-gray-100 border-solid px-10 py-6">
                <p class="w-1/12">Phone number</p>
                <input type="text" name="phone_number" value="{{ old('phone_number') ?? $order->phone_number }}" class="form-select mt-1 w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4">
                @error('phone_number')
                    <span class="text-red-500 font-medium">{{ $message }}</span>
                @enderror
            </div> 
        </div>

        <div class="flex mt-4">
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.orders.index') }}" class="font-medium text-lg inline-flex items-center rounded-md bg-white text-black px-4 py-2 shadow-lg hover:bg-zinc-50 gap-3">
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
        @method('PUT')
        @csrf
    </form>

</div>






@endsection