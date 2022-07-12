<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Icons+Outlined" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    @include('admin.layouts.header')

    <div class="flex min-h-screen bg-slate-100">
        @includeWhen(isset($sidebar) ,'admin.layouts.sidebar')
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.tags-input').keypress(function(e) {
                var key = e.which;
                console.log(key)
                if (key == 13 || key == 44) {
                    e.preventDefault();
                    var tag = $(this).val();

                    if (tag.length > 0) {
                        $("<p class="px-1 py-1 bg-yellow-400 rounded-lg">Yellow</p>").insertBefore(this).fadeIn(100);
                        
                        $(this).val("");
                    }
                }
            })

            $('.container-tags-input').on("click", function() {
                $(this).parent("p").remove(100)
            })

        })
    </script>

</body>
</html>