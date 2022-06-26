@extends('layouts.master', ['footer' => true])

@section('title', $title)

@section('content')

    <div class="lg:mx-20 mx-2 mt-3">
        <p class=" text-zinc-600">Trang chủ / Nam</p>
        <div class="flex mt-8">
            <div>
                <p class="font-bold">Result</p>
                <p class="mt-2">122 items</p>
            </div>
            <div class="ml-auto">
                <p class="font-bold">Sorting by</p>
                <select class="border border-solid border-zinc-300 px-2 py-1 rounded-lg mt-2">
                    <option checked="checked"> 
                        Default
                    </option>
                    <option value="0">
                        Price: Low to high
                    </option>
                    <option value="0">
                        Price: High to low
                    </option>
                </select>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row mt-6 gap-4">
            <div class="lg:border-r-2 lg:border-solid lg:border-zinc-300 lg:w-3/5">
                <p class="text-4xl font-medium">Nam</p>
                <div class="flex text-xl lg:mt-6 mt-3">
                    <p>Áo</p>
                    <span class="material-icons-outlined ml-auto mr-4">
                        keyboard_arrow_down
                    </span>
                </div>
                <div class="flex text-xl mt-1">
                    <p>Quần</p>
                    <span class="material-icons-outlined ml-auto mr-4">
                        keyboard_arrow_down
                    </span>
                </div>
                <div class="flex text-xl mt-1">
                    <p>Phụ kiện</p>
                    <span class="material-icons-outlined ml-auto mr-4">
                        keyboard_arrow_down
                    </span>
                </div>
            </div>
            <div class="grow grid lg:grid-cols-4 grid-cols-2 gap-3">
                @for ($i = 0; $i < 8; $i++)
                    <a href="{{ route('product-detail') }}">
                        <img src="https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/455933/item/vngoods_74_455933.jpg?width=1008&impolicy=quality_75" alt="">
                        <div class="my-3">
                            <p class="text-xl font-medium text-zinc-600">Nam</p>
                            <p class="mt-2 font-bold">AIRism Cotton Áo Thun Cổ Giả Dáng Rộng</p>
                            <p class="mt-2 text-xl text-red-600 font-bold">$20.000</p>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </div>
    

@endsection