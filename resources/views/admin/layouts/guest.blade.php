<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Icons+Outlined" />
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">


</head>
<body>
    @include('admin.layouts.header')

    <div class="flex min-h-screen bg-slate-100">
        @includeWhen(isset($sidebar) ,'admin.layouts.sidebar')
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="{{ asset('js/admin/app.js')}}"></script>

    {{-- <script>

    </script> --}}

</body>
</html>