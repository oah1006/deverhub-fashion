@extends('layouts.master')

@section('title', 'home')

@section('content')

    <div class="lg:mx-20 mx-2 my-10 min-h-screen">
        <div class="flex lg:flex-row flex-col lg:gap-36 gap-10">
            <div>
                <div>
                    <p class="text-lg font-medium">Hao Tommy</p>
                    <p class="text-sm text-zinc-600">bnhao10062001@gmail.com</p>
                </div>
        
                <div class="lg:mt-8 mt-4 ">
                    <ul class="grid grid-cols-2 lg:grid-cols-none">
                        <li>
                            <a href="{{ route('profile.index') }}">Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('profile.change-password') }}">Change Password</a>
                        </li>
                        <li>
                            <a href="{{ route('profile.delivery-address') }}">Delivery Address</a>
                        </li>
                        <li>
                            <a href="{{ route('profile.orders') }}">Order</a>
                        </li>
                    </ul>
                </div>
            </div>
    
            <div class="grow">
                @yield('box')
            </div>
        </div>
    </div>





@endsection