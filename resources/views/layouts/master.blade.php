<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Icons+Outlined" />
    <link href="/css/app.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
</head>
<body>
    <div>
        @include('layouts.header')
    </div>

    <div>
        @yield('content')
    </div>

    @includeWhen(isset($footer) ,'layouts.footer')

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>