@extends('layouts.master', ['footer' => true])

@section('title', $title)

@section('content')

    <div class="lg:mx-20 mx-2">
        <p class="mt-8 text-3xl font-medium">CART</p>
        <div class="flex lg:flex-row flex-col lg:my-8 my-4 gap-10">
            <div class="border border-solid border-zinc-200 rounded-lg px-3 py-3 lg:w-2/3">
                @for ($i = 0; $i < 3; $i++)
                <div class="flex lg:gap-10 gap-8 my-8 grow">
                        <div>
                            <img class="lg:w-40 lg:h-40 w-24 h-24 object-cover" src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/455933/item/goods_07_455933.jpg?width=648&impolicy=quality_75" alt="">
                        </div>
                        <div class="flex lg:flex-row flex-col lg:gap-20 grow">
                            <div class="flex flex-col justify-center lg:gap-3">
                                <p class="lg:text-xl font-medium lg:w-56 whitespace-normal">AIRism Cotton Áo Thun Cổ Giả Dáng Rộng</p>
                                <p class="text-lg font-medium text-zinc-500">Color: Red</p>
                                <p class="text-lg font-medium text-zinc-500">Size: S</p>
                            </div>
                            <div class="flex gap-4 lg:my-auto items-center grow lg:ml-24">
                                <p class="text-2xl font-medium lg:my-auto lg:mr-auto mt-3 text-red-600">$20.000</p>
                                <span class="material-icons-outlined cursor-pointer">
                                    remove
                                </span>
                                <p class="text-xl">0</p>
                                <span class="material-icons-outlined cursor-pointer">
                                    add
                                </span>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
            <div class="border border-solid border-zinc-200 rounded-lg px-3 py-3 h-64 flex flex-col lg:w-1/3">
                <div class="flex items-center">
                    <p class="text-xl font-medium">Subtotal</p>
                    <p class="ml-auto text-lg font-medium">$60.00</p>
                </div>
                <div class="flex items-center">
                    <p class="text-xl font-medium">Delivery</p>
                    <p class="ml-auto text-lg font-medium">$10.00</p>
                </div>
                <div class="mt-auto flex border-t border-solid border-zinc-200 pt-3 items-center">
                    <p class="text-xl font-medium">Total</p>
                    <p class="ml-auto text-lg font-medium">$70.00</p>                 
                </div>
                <a
                    href="#"
                    class="w-full text-center py-3 rounded bg-black text-white mt-4 inline-block"
                    >Check out
                </a>
            </div>
        </div>
    </div>



@endsection