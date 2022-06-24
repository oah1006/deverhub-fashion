@extends('layouts.master', ['footer' => true])

@section('title', $title)

@section('content')
    <div class="lg:mx-20 mx-3 mt-3">
        <p class="text-zinc-600">Trang chủ / Nam / Áo/ Áo thun/ AIRism Cotton Áo Thun Cổ Giả Dáng Rộng</p>
        <div class="flex flex-col lg:flex-row gap-8 my-8">
            <div class="lg:w-3/5 flex flex-col lg:flex-row gap-4">
                <div class="grid grid-cols-2 gap-2 mx-auto lg:mx-0">
                    @for($i = 0; $i < 6; $i++)
                    <img class="w-32 h-32 object-cover" src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/455933/item/goods_07_455933.jpg?width=160&impolicy=quality_75" alt="">
                    @endfor
                </div>
                <div class="order-first lg:order-none">
                    <img class="lg:w-full lg:h-[500px] w-96 h-96 object-cover" src="https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/455933/sub/vngoods_455933_sub7.jpg?width=1600&impolicy=quality_75" alt="">
                </div>
            </div>
            
            <div class="lg:w-2/5 order-first lg:order-none">
                <p class="w-64 text-3xl font-medium">AIRism Cotton Áo Thun Cổ Giả Dáng Rộng</p>
                <p class="text-4xl text-red-600 font-bold mt-3">$20.000</p>
                <p class="mt-3 text-zinc-600 font-medium">Color</p>
                <div class="flex gap-4 mt-2">
                    <div class="w-8 h-8 bg-red-500 rounded-sm shadow-sm shadow-red-600"></div>
                    <div class="w-8 h-8 bg-zinc-100 rounded-sm shadow-sm shadow-zinc-100"></div>
                    <div class="w-8 h-8 bg-blue-500 rounded-sm shadow-sm shadow-blue-500"></div>
                    <div class="w-8 h-8 bg-green-500 rounded-sm shadow-sm shadow-green-500""></div>
                </div>
                <p class="mt-3 text-zinc-600 font-medium">Size</p>
                <div class="flex gap-4 mt-2">
                    <div class="w-8 h-8 border border-solid border-zinc flex items-center justify-center">S</div>
                    <div class="w-8 h-8 border border-solid border-zinc flex items-center justify-center">S</div>
                    <div class="w-8 h-8 border border-solid border-zinc flex items-center justify-center">S</div>
                    <div class="w-8 h-8 border border-solid border-zinc flex items-center justify-center">S</div>
                </div>
                <div class="border-t border-solid border-zinc-200 mt-3">
                    <p class="my-3">Description:</p>
                    <p class="lg:block hidden">Thư giãn, đường cắt thoải mái. Một chiếc áo thun có cổ giả tạo phong cách riêng.</p>
                </div>
            </div>
        </div>

        <p class="text-3xl font-medium">Related Products</p>
        <div class="grid lg:grid-cols-4 grid-cols-2 gap-4 mb-8 mt-3">
            @for ($i = 0; $i < 4; $i++)
                <div>
                    <img src="https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/455933/item/vngoods_74_455933.jpg?width=1008&impolicy=quality_75" alt="">
                    <div class="my-3">
                        <p class="lg:text-xl text-base font-medium text-zinc-600">Nam</p>
                        <p class="mt-2 font-bold">AIRism Cotton Áo Thun Cổ Giả Dáng Rộng</p>
                        <p class="mt-2 text-xl text-red-600 font-bold">$20.000</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection