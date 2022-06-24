@extends('layouts.master', ['footer' => true])

@section('title', $title)

@section('content')
    <div class="mx-20 mt-3">
        <p class="text-zinc-600">Trang chủ / Nam / Áo/ Áo thun/ AIRism Cotton Áo Thun Cổ Giả Dáng Rộng</p>
        <div class="flex gap-8 my-8">
            <div class="w-1/5 grid grid-cols-2">
                @for($i = 0; $i < 6; $i++)
                <img class="w-32 h-32 object-cover" src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/455933/item/goods_07_455933.jpg?width=160&impolicy=quality_75" alt="">
                @endfor
            </div>
            <div class="w-2/5">
                <img src="https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/455933/sub/vngoods_455933_sub7.jpg?width=1600&impolicy=quality_75" alt="">
            </div>
            <div class="w-2/5">
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
                    <p>Thư giãn, đường cắt thoải mái. Một chiếc áo thun có cổ giả tạo phong cách riêng.</p>
                </div>
            </div>
        </div>

        <p class="text-3xl font-medium">Related Products</p>
        <div class="flex gap-4 mb-8 mt-3">
            @for ($i = 0; $i < 4; $i++)
                <div>
                    <img src="https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/455933/item/vngoods_74_455933.jpg?width=1008&impolicy=quality_75" alt="">
                    <div class="my-3">
                        <p class="text-xl font-medium text-zinc-600">Nam</p>
                        <p class="mt-2 font-bold">AIRism Cotton Áo Thun Cổ Giả Dáng Rộng</p>
                        <p class="mt-2 text-xl text-red-600 font-bold">$20.000</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection