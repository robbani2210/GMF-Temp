<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel = "icon" href ="{{ asset('img/logo GMF.png') }}" 
        type = "image/x-icon">
        <link href="/css/app.css" rel="stylesheet">
        
    </head>
    <body>
        @section('sidebar')
          @include('layouts.sidebar')
        @show

        <div class="flex flex-col">
            <div class="md:ml-48">
                @yield('content')
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>