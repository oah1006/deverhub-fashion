@extends('layouts.master')

@section('title', 'home')

@section('content')

    <div class="lg:px-20">
        <div class="flex gap-10">
            <div>
                <div>
                    <p class="text-lg font-medium">Hao Tommy</p>
                    <p class="text-sm text-zinc-600">bnhao10062001@gmail.com</p>
                </div>
        
                <div class="mt-8">
                    <ul>
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li>
                            <a href="#">Change Password</a>
                        </li>
                        <li>
                            <a href="#">Delivery Address</a>
                        </li>
                        <li>
                            <a href="#">Order</a>
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