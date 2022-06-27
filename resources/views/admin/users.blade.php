@extends('admin.layouts.guest')

@section('title', $title)


@section('content')

    <div class="bg-zinc-200 h-screen grow">
        <p>{{ $title }}</p>
    </div>

@endsection