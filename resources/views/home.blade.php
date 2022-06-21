@extends('layouts.blank')

@section('title', $title)

@section('content')

    <div class="swiper mySwiper w-full h-screen fixed z-10">
        <div class="swiper-wrapper w-96 h-48">
            <div class="swiper-slide w-96 h-48 bg-slate-300">
                <img class="w-full h-full" src="{{ asset('image/home1.jpg') }}" alt="">
                <div class="w-1/2 top-48 left-20 absolute">
                    <p class="font-medium text-6xl text-white">
                        Explosion Your Style
                    </p>
                    <p class="mt-10 text-lg text-white">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Ipsum suscipit sapiente omnis asperiores dolore cumque dignissimos facilis natus 
                        tempore reprehenderit, eveniet distinctio ratione, reiciendis fugit optio, qui minus. 
                        Exercitationem, repellat.
                    </p>
                </div>
            </div>
            <div class="swiper-slide w-96 h-48 bg-red-300">
                <img class="w-full h-full" src="{{ asset('image/home2.jpg') }}" alt="">
                <div class="w-1/2 top-48 left-20 absolute">
                    <p class="font-medium text-6xl text-white">
                        Explosion Your Style
                    </p>
                    <p class="mt-10 text-lg text-white">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Ipsum suscipit sapiente omnis asperiores dolore cumque dignissimos facilis natus 
                        tempore reprehenderit, eveniet distinctio ratione, reiciendis fugit optio, qui minus. 
                        Exercitationem, repellat.
                    </p>
                </div>
            </div>
            <div class="swiper-slide w-96 h-48 bg-blue-300">
                <img class="w-full h-full" src="{{ asset('image/home3.jpg') }}" alt="">
                <div class="w-1/2 top-48 left-20 absolute">
                    <p class="font-medium text-6xl text-white">
                        Explosion Your Style
                    </p>
                    <p class="mt-10 text-lg text-white">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Ipsum suscipit sapiente omnis asperiores dolore cumque dignissimos facilis natus 
                        tempore reprehenderit, eveniet distinctio ratione, reiciendis fugit optio, qui minus. 
                        Exercitationem, repellat.
                    </p>
                </div>
            </div>
            <div class="swiper-slide w-96 h-48 bg-green-300">
                <img class="w-full h-full" src="{{ asset('image/home4.jpg') }}" alt="">
                <div class="w-1/2 top-48 left-20 absolute">
                    <p class="font-medium text-6xl text-white">
                        Explosion Your Style
                    </p>
                    <p class="mt-10 text-lg text-white">
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
    {{-- <div class="slider overflow-hidden w-full h-full mt-10 flex relative">
        <div class="slider-item w-full h-full relative flex-none">
            
        </div>
        <div class="slider-item w-full h-full relative flex-none">
            <img class="w-full h-full" src="{{ asset('image/home2.jpg') }}" alt="">
            <div class="w-1/2 top-10 left-20 absolute">
                <p class="font-medium text-6xl text-white">
                    Explosion Your Style
                </p>
                <p class="mt-10 text-lg text-white">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Ipsum suscipit sapiente omnis asperiores dolore cumque dignissimos facilis natus 
                    tempore reprehenderit, eveniet distinctio ratione, reiciendis fugit optio, qui minus. 
                    Exercitationem, repellat.
                </p>
            </div>
        </div>
        <div class="slider-item w-full h-full relative flex-none">
            <img class="w-full h-full" src="{{ asset('image/home3.jpg') }}" alt="">
            <div class="w-1/2 top-10 left-20 absolute">
                <p class="font-medium text-6xl text-white">
                    Explosion Your Style
                </p>
                <p class="mt-10 text-lg text-white">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Ipsum suscipit sapiente omnis asperiores dolore cumque dignissimos facilis natus 
                    tempore reprehenderit, eveniet distinctio ratione, reiciendis fugit optio, qui minus. 
                    Exercitationem, repellat.
                </p>
            </div>
        </div>
        <div class="slider-item w-full h-full relative flex-none">
            <img class="w-full h-full" src="{{ asset('image/home4.jpg') }}" alt="">
            <div class="w-1/2 top-10 left-20 absolute">
                <p class="font-medium text-6xl text-white">
                    Explosion Your Style
                </p>
                <p class="mt-10 text-lg text-white">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Ipsum suscipit sapiente omnis asperiores dolore cumque dignissimos facilis natus 
                    tempore reprehenderit, eveniet distinctio ratione, reiciendis fugit optio, qui minus. 
                    Exercitationem, repellat.
                </p>
            </div>
        </div>
        <span class="material-icons-outlined text-white absolute top-1/2 text-7xl" id="button-prev">
            arrow_back_ios
        </span>
        <span class="material-icons-outlined text-white absolute top-1/2 right-0 text-7xl" id="button-next">
            arrow_forward_ios
        </span>
    </div> --}}
@endsection