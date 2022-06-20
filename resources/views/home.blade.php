@extends('layouts.master')

@section('title', $title)

@section('content')
    <div class="overflow-auto fixed w-full h-full mt-10 class="scroll-smooth"" id="slider">
        <div class="w-full h-full slider-child">
            <img class="w-full h-full" src="{{ asset('image/home1.jpg') }}" alt="">
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
        <div class="w-full h-full slider-child">
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
        <div class="w-full h-full slider-child">
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
        <div class="w-full h-full slider-child">
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
    </div>
    
@endsection