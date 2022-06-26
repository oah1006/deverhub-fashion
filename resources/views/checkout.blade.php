@extends('layouts.master', ['footer' => true])

@section('title', $title)


@section('content')
    <div class="lg:px-20 px-2">
        <p class="mt-8 text-3xl font-medium">CHECKOUT</p>
        <div class="flex lg:flex-row flex-col lg:my-8 my-4 gap-8">
            <form method="POST">
                <div class="flex gap-3">
                    <input type="text" name="first_name" placeholder="First Name" class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                    <input type="text" name="last_name" placeholder="Last Name" class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                </div>
                <input type="text" name="email" placeholder="Email" class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                <select name="gender" class="form-select w-full text-gray-700 bg-white border border-solid border-zinc-300 rounded py-2 px-4 mt-2">
                    <option selected>Gender</option>
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                    <option value="2">Others</option>
                </select>
                <input type="text" name="address" placeholder="My address" class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
                <input type="text" name="phone_number" placeholder="Phone number" class="border-zinc-200 border-solid border w-full px-4 py-2 mt-2 rounded-lg">
            </form>
            <div>
                <p class="text-xl font-medium mb-2">Order Items</p>
                <div class="border border-solid border-zinc-200 rounded-lg px-3 py-3">
                    @for ($i = 0; $i < 3; $i++)
                    <div class="flex gap-4 my-8">
                            <div class="flex gap-4">
                                <img class="w-24 h-24" src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/455933/item/goods_07_455933.jpg?width=648&impolicy=quality_75" alt="">
                            </div>
                            <div class="flex lg:flex-row flex-col lg:gap-20">
                                <div>
                                    <p class="font-medium w-56">AIRism Cotton Áo Thun Cổ Giả Dáng Rộng</p>
                                    <p class="font-medium text-zinc-500">Color: Red</p>
                                    <p class="font-medium text-zinc-500">Size: S</p>
                                </div>
                                <p class="text-2xl font-medium lg:my-auto lg:mr-auto mt-3 text-red-600">$20.000</p>
                            </div>
                    </div>
                    @endfor
                </div>

                <p class="text-xl font-medium mt-8">Payment Summary</p>
                <div class="border border-solid border-zinc-200 rounded-lg px-3 py-3 grow h-64 flex flex-col my-2">
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
                </div>

                <p class="text-xl font-medium mt-8">Payments</p>
                <div class="flex flex-col gap-2 my-2">
                    <label class="flex items-center p-4 border border-solid border-zinc-300 rounded cursor-pointer">
                        <input type="radio" name="payments" value="cod">
                        <p class="pl-4">Cash On Delivery</p>
                    </label>
                    <label class="flex items-center p-4 border border-solid border-zinc-300 rounded cursor-pointer">
                        <input type="radio" name="payments" value="banking">
                        <p class="pl-4">Internet Bankings</p>
                    </label>
                </div>
                <button
                    type="submit"
                    class="w-full text-center py-3 rounded bg-black text-white mt-8"
                    >Confirm
                </button>
            </div>
        </div>
    </div>


@endsection