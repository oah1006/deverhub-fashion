<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Icons+Outlined" />
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    @include('admin.layouts.header')

    <div class="flex min-h-screen">
        @include('admin.layouts.sidebar')

        @yield('content')
    </div>

    @include('admin.layouts.footer')
</body>
</html>