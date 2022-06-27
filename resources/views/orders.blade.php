@extends('layouts.profile', ['footer'  => true]);

@section('title', $title)

@section('box')

    <p class="text-4xl text-bold mb-9">Order</p>

    <table class="w-full text-left">
        <thead class="font-medium bg-gray-50">
            <tr>
                <td class="lg:px-6 px-2 py-3">
                    #
                </td>
                <td class="lg:px-6 px-2 py-3">
                    State
                </td>
                <td class="lg:px-6 px-2 py-3">
                    Total bill
                </td>
                <td class="lg:px-6 px-2 py-3">

                </td>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b">
                <td class="lg:px-6 px-2 py-3 font-medium whitespace-nowrap">
                    001
                </td>
                <td class="lg:px-6 px-2 py-3 font-medium whitespace-nowrap">
                    <button class="px-1 py-0.5 text-center text-white rounded-lg bg-green-600 text-sm">Delivering</button>
                </td>
                <td class="lg:px-6 px-2 py-3 font-medium whitespace-nowrap">
                    $20.000
                </td>
                <td class="lg:px-6 px-2 py-3 font-medium whitespace-nowrap">
                    <a href="{{ route('profile.order-detail') }}" class="text-zinc-500 hover:underline">Detail</a>
                </td>
            </tr>
        </tbody>
    </table>

@endsection