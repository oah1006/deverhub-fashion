<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="/css/app.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="{{ asset('js/app.js')}}"></script>
</head>
<body>
    <div>
        @include('layouts.header')
    </div>

    <div>
        @yield('content')
    </div>
    {{-- <div>
        @include('layouts.footer')
    </div> --}}
</body>
</html>