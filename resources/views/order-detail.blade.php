@extends('layouts.profile', ['footer' => true])

@section('title', $title)

@section('box')

    <div class="flex items-center">
        <p class="text-4xl text-bold">Order detail</p>
        <a href="{{ url()->previous() }}" class="rounded-lg bg-blue-900 text-white ml-auto py-2 px-4">Back</a>
    </div>

    <div class="mt-8">
        @for ($i = 0; $i < 3; $i++)
        <div class="flex gap-4 my-8">
                <div class="flex gap-4">
                    <img class="w-32 h-32" src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/455933/item/goods_07_455933.jpg?width=648&impolicy=quality_75" alt="">
                </div>
                <div class="flex lg:flex-row flex-col lg:gap-20 grow">
                    <div>
                        <p class="font-medium w-56">AIRism Cotton Áo Thun Cổ Giả Dáng Rộng</p>
                        <p class="font-medium text-zinc-500">Color: Red</p>
                        <p class="font-medium text-zinc-500">Size: S</p>
                    </div>
                    <p class="text-2xl font-medium lg:my-auto lg:ml-auto mt-3 text-red-600">$20.000</p>
                </div>
        </div>
        @endfor
    </div>

    <p class="text-xl font-medium mt-8">Payment Summary</p>
    <div class="py-3 h-64 flex flex-col my-2">
        <div class="flex items-center">
            <p class="text-xl font-medium">Subtotal</p>
            <p class="ml-auto font-medium">$60.00</p>
        </div>
        <div class="flex items-center">
            <p class="text-xl font-medium">Delivery</p>
            <p class="ml-auto font-medium">$10.00</p>
        </div>
        <div class="mt-auto flex border-t border-solid border-zinc-200 pt-3 items-center">
            <p class="text-xl font-medium">Total</p>
            <p class="ml-auto font-medium">$70.00</p>                 
        </div>
    </div>

@endsection