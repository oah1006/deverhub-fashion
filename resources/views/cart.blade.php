@extends('layouts.master', ['footer' => true])

@section('title', $title)

@section('content')

    <div class="mx-20">
        <p class="text-3xl font-medium">CART</p>
        <div class="flex my-8 gap-16">
            <div class="border border-solid border-zinc-200 rounded-lg px-3 py-3">
                @for ($i = 0; $i < 3; $i++)
                <div class="flex gap-20 my-8">
                        <div class="flex gap-4">
                            <img class="w-40 h-40" src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/455933/item/goods_07_455933.jpg?width=648&impolicy=quality_75" alt="">
                            <div class="flex flex-col justify-center gap-3">
                                <p class="text-xl font-medium w-56">AIRism Cotton Áo Thun Cổ Giả Dáng Rộng</p>
                                <p class="text-lg font-medium text-zinc-500">Color: Red</p>
                                <p class="text-lg font-medium text-zinc-500">Size: S</p>
                            </div>
                        </div>
                        <p class="text-xl font-medium my-auto">$20.000</p>
                        <div class="flex gap-4 my-auto">
                            <span class="material-icons-outlined cursor-pointer">
                                remove
                            </span>
                            <p x-text="qty">0</p>
                            <span class="material-icons-outlined cursor-pointer">
                                add
                            </span>
                        </div>
                </div>
                @endfor
            </div>
            <div class="border border-solid border-zinc-200 rounded-lg px-3 py-3 grow h-64 flex flex-col">
                <div class="flex items-center">
                    <p class="text-xl font-medium">Subtotal</p>
                    <p class="ml-auto">$60.00</p>
                </div>
                <div class="flex items-center">
                    <p class="text-xl font-medium">Delivery</p>
                    <p class="ml-auto">$10.00</p>
                </div>
                <div class="mt-auto flex border-t border-solid border-zinc-200 pt-3 items-center">
                    <p class="text-xl font-medium">Total</p>
                    <p class="ml-auto">$70.00</p>                 
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