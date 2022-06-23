@extends('layouts.blank')

@section('title', $title)

@section('content')

    <div class="swiper mySwiper w-full h-screen fixed z-10">
        <div class="swiper-wrapper w-96 h-48">
            <div class="swiper-slide w-96 h-48 bg-slate-300">
                <img class="w-full h-full object-cover" src="{{ asset('image/home2.jpg') }}" alt="">
                <div class="w-1/2 top-48 left-20 absolute">
                    <p class="font-medium text-6xl text-white">
                        Explosion Your Style
                    </p>
                    <p class="mt-10 text-lg text-white lg:block hidden">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Ipsum suscipit sapiente omnis asperiores dolore cumque dignissimos facilis natus 
                        tempore reprehenderit, eveniet distinctio ratione, reiciendis fugit optio, qui minus. 
                        Exercitationem, repellat.
                    </p>
                </div>
            </div>
            <div class="swiper-slide w-96 h-48 bg-red-300">
                <img class="w-full h-full object-cover" src="{{ asset('image/home1.jpg') }}" alt="">
                <div class="w-1/2 top-48 left-20 absolute">
                    <p class="font-medium text-6xl text-white">
                        Explosion Your Style
                    </p>
                    <p class="mt-10 text-lg text-white lg:block hidden">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Ipsum suscipit sapiente omnis asperiores dolore cumque dignissimos facilis natus 
                        tempore reprehenderit, eveniet distinctio ratione, reiciendis fugit optio, qui minus. 
                        Exercitationem, repellat.
                    </p>
                </div>
            </div>
            <div class="swiper-slide w-96 h-48 bg-blue-300">
                <img class="w-full h-full object-cover" src="{{ asset('image/home3.jpg') }}" alt="">
                <div class="w-1/2 top-48 left-20 absolute">
                    <p class="font-medium text-6xl text-white">
                        Explosion Your Style
                    </p>
                    <p class="mt-10 text-lg text-white lg:block hidden">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Ipsum suscipit sapiente omnis asperiores dolore cumque dignissimos facilis natus 
                        tempore reprehenderit, eveniet distinctio ratione, reiciendis fugit optio, qui minus. 
                        Exercitationem, repellat.
                    </p>
                </div>
            </div>
            <div class="swiper-slide w-96 h-48 bg-green-300">
                <img class="w-full h-full object-cover" src="{{ asset('image/home4.jpg') }}" alt="">
                <div class="w-1/2 top-48 left-20 absolute">
                    <p class="font-medium text-6xl text-white">
                        Explosion Your Style
                    </p>
                    <p class="mt-10 text-lg text-white lg:block hidden">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Ipsum suscipit sapiente omnis asperiores dolore cumque dignissimos facilis natus 
                        tempore reprehenderit, eveniet distinctio ratione, reiciendis fugit optio, qui minus. 
                        Exercitationem, repellat.
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
@endsection